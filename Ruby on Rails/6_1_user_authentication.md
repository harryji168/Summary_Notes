# User Authentication

## Add User Model

To build user authentication system we start by creating a user model. We do so by running the Rails generator:

```sh
rails g model user first_name:string last_name:string email:string:index password_digest:string 
```

Before running `rails db:migrate` we can optionally add an index on the `email` field in the migration. This is recommended, because we will be searching users by email often. Having an index on the `email` field speeds up such queries. We can optionally add `unique: true` option to the index which enforces uniqueness at the database level.

```ruby
# db/migrate/???_create_users.rb
class CreateUsers < ActiveRecord::Migration[6.1]
  def change
    create_table :users do |t|
      t.string :first_name
      t.string :last_name
      t.string :email, index:{unique: true}
      # this will add index to column email when you do query, it will speed up the query
      
      t.string :password_digest

      t.timestamps
    end
    add_index :users, :email
  end
end
```

```sh
rails db:migrate
```

## in `schema.rb`
```ruby 
create_table "users", force: :cascade do |t|
    t.string "first_name"
    t.string "last_name"
    t.string "email"
    t.string "password_digest"
    t.datetime "created_at", precision: 6, null: false
    t.datetime "updated_at", precision: 6, null: false
    t.index ["email"], name: "index_users_on_email", unique: true
end
```

# Use Active Model has_secure_password `Gemfile`

gem 'bcrypt', '~> 3.1.7'

```sh
bundle
```


```
rails g migration add_user_references_to_products user:references
```
```
rails g migration add_user_references_to_reviews user:references
````

because have seeds file 

```sh
rails db:drop
rails db:create
rails db:migrate
```
 

 `\models\products.rb`

belongs_to :user

 `\models\review.rb`

belongs_to :user

## Call `has_secure_password` in User Model

We call the `has_secure_password` method in the `User` model. This adds a few features to the model:

```ruby
class User < ApplicationRecord 
  
    has_secure_password

    # it requires a column named password_digest and the gem bcrypt
    # it will add a presence validation ro the password field
    # it will add two attribute accessor for `passowrd` and `password_confirmation`

    has_many :products, dependent: :destroy
    has_many :reviews,  dependent: :destroy
end
```

* Adds attribute accessors to the user model for `password` and `password_confirmation`
* Validates presence of `password` and password matching with `password_confirmation` if present
* Encrypts the `password` and stores it in password_digest using the `bcrypt` gem

For more details on this method checkout [this link](http://api.rubyonrails.org/classes/ActiveModel/SecurePassword/ClassMethods.html#method-i-has_secure_password).

In order for this method to work we have to have the `bcrypt` gem added to our `Gemfile`. The gem is commented out by default with a new Rails project so we just uncomment that line and run `bundle` in our terminal.

```shell
rails g controller users --no-helper --no-assets
```

## Implement the `UsersController` Actions
```
#controllers\users_controller.rb`
class UsersController < ApplicationController
    def new
    end    
end
```


implement the `new.html.erb` template.

```html
<!-- app/views/users/new.html.erb -->
<h1>Sign Up </h1>
    <% if @user.errors.any?%>
        <p><%= @user.errors.full_messages.join(', ')%></p>
    <% end%>
    <%= form_with model: @user do |form| %>
    <div>
        <%= form.label :first_name%>
        <%= form.text_field :first_name%>
    </div>
    <div>
        <%= form.label :last_name%>
        <%= form.text_field :last_name%>
    </div>
    <div>
        <%= form.label :email%>
        <%= form.text_field :email%>
    </div>
    <div>
        <%= form.label :password%>
        <%= form.text_field :password%>
    </div>
    <div>
        <%= form.label :password_confirmation%>
        <%= form.text_field :password_confirmation%>
    </div>
    <%= form.submit "Sign Up"%>
<% end %> 
```



We now implement the `new` and `create` actions for the `UsersController`. Firstly, we add a user resources route:

```ruby
# config/routes.rb
get('/',{to:'welcome#index' , as: 'root'})

resources :users, only: [:new, :create]
```

open brower
```
http://localhost:3000/users/new
```

Then, we implement the new and create actions as standard ones with Rails CRUD.

```ruby
# app/controllers/users_controller.rb
class UsersController < ApplicationController
  def new
    @user = User.new
  end

  def create
    @user = User.new(user_params)
    if @user.save
      session[:user_id] = @user.id
      redirect_to root_path, notice: "Logged In!"
    else
      render :new
    end
  end

  private

  def user_params
    params.require(:user).permit(
      :first_name,
      :last_name,
      :email,
      :password,
      :password_confirmation
    )
  end
end
```

The only difference from a standard CRUD is that after the users successfully create their user record we add `sessions[:user_id] = @user.id`. This way, we authenticate the user to our website using the session upon successful account creation.


After that, w

## Implement the `SessionsController`

make sessions
```sh 
rails g controller sessions --no-helper --no-assets
```

We implement the `SessionsController` as a standard Rails controller with two actions `new` and `create`. We utilize the `@user.authenticate` method which comes with the `has_secure_password` method. This method takes a `password` and hashes it the same way it was hashed the first time and compares the outcome with `password_digest`. If the outcome is the same it means that the user has entered the correct password so the method returns true. If the password is not the same then the method will return false. This is because we can’t go from `password_digest` to a clear-text `password`. We can only go one way with Hashing algorithms.

```ruby
# app/controllers/sessions_controller.rb
class SessionsController < ApplicationController

  def new
  end

  def create
    @user = User.find_by_email params[:email]
    if @user && @user.authenticate(params[:password])
      session[:user_id] = @user.id
      redirect_to root_path, notice: "Logged in"
    else
      flash[:alert] = "Wrong email or password"
      render :new
    end
  end

end
```

If the user is found and authenticated properly, we log in the user by setting a session key, `:user_id`, to the user's id as follows: `sessions[:user_id] = @user.id`.

We use `form_tag` instead of `form_for` to create the session new form, because we’re not creating a model. We never implemented a Session model that stores to the database.

```html
<!-- app/views/sessions/new.html.erb -->

<h1>Sign In</h1>

<%= form_with url: session_path do |form| %>
<div>
    <%= form.label :email%>
    <%= form.text_field :email%>
</div>
<div>
    <%= form.label :password%>
    <%= form.text_field :password%>
</div>
<%= form.submit "Sign In"%>
<% end %>

<h1>Sign In</h1>

```

## Implement the `SessionsController` Destroy action

We start by adding the destroy routes in our `routes.rb` file. We can make as a standard destroy route which means that we will need to have an `:id` in the route. This is not really needed or recommended in the case of the user. We have the user id stored in the `session` so we shouldn't make it part of the url. Also, it’s generally advisable to hide the user id whenever possible for security reasons.

We can accomplish this by adding the destroy route with `on: :collection` option which creates the route without requiring an `:id` or `:user_id` in it.

```ruby
# config/routes.rb
resource :sessions, only: [:new, :destroy, :create]
# `resource` is singular instead of `resources`
  # Unlike `resources`, `resource` will create routes that do CRUD opreation
  # on only one thing. Also there will be no index reoutes, and no route will
  # have an `:id` wildcard. but the controller name is still plural

```
``` both works sessions and session
resource :session, only: [:new, :create, :destroy]  
```


```ruby
# app/controllers/sessions_controller.rb
# ...
  def destroy
    session[:user_id] = nil
    redirect_to root_path, notice: "Logged out!"
  end
end
```

## Implement Controller, Helper Methods then Integrate Them

We'll implement a few controller methods that will help us use user authentication within our application. We'll put those methods in `ApplicationController` to make them accessible in all of our controllers.

We make the `current_user` and `user_signed_in?` helper methods by adding `helper_method :current_user` and `helper_method :user_signed_in?`, because we need to access those in the view files as well as controller files.

```ruby
# app/controllers/application_controller.rb
  def authenticate_user!
    redirect_to new_session_path, notice: "Please sign in" unless user_signed_in?
  end

  def user_signed_in?
    current_user.present?
  end
  helper_method :user_signed_in?

  def current_user
    @current_user ||= User.find_by_id session[:user_id]
  end
  helper_method :current_user
end
```

To make sure that a user is authenticated before accessing a specific controller action, we add a `before_action` as in:

```ruby
before_action :authenticate_user!, except: [:index, :show]
```
Which will redirect the user to the sign in page if they are not authenticated.

```ruby
# app/controllers/posts_controller.rb
#before_action :authenticate_user!, except: [:index, :show]
```

```ruby
# app/views/layouts/application.html.erb
<% if user_signed_in? %>
  Hello <%= current_user.full_name %>,
  <%= link_to "Logout", session_path, method: :delete,
            data: {confirm: "are you sure you want to log out?"}%>
<% else %>
  <%= link_to "Login", new_session_path %> |
  <%= link_to "Sign Up", new_user_path %>
<% end %>
<hr>
```
 

```ruby
# app/controllers/questions_controller.rb
before_action :authenticate_user!, except: [:show, :index]

# ...
def create
  @question = Question.new question_params
  @question.user = current_user
# ...
```

```ruby
# app/models/question.rb
belongs_to :user, optional: true
```
  

Show user in `Question#show`.

```
rails g migration add_user_references_to_answers user:references
```

in models

@question.rb

```
#question.rb
belongs_to :user
```

```
#user.rb
has_many :answers, dependent: :nullify
has_many :questions, dependent: :nullify

```



show.html.erb
```
<h5>
    Created by: <%= @question.user.first_name %>
</h5>

```


# generate user 


```shell
rails g controller users --no-helper --no-assets
```

## Implement the `UsersController` Actions
```
#controllers\users_controller.rb`
class UsersController < ApplicationController
    def new
    end    
end
```


implement the `new.html.erb` template.

```html
<!-- app/views/users/new.html.erb -->
<h1>Sign Up </h1>
    <% if @user.errors.any?%>
        <p><%= @user.errors.full_messages.join(', ')%></p>
    <% end%>
    <%= form_with model: @user do |form| %>
    <div>
        <%= form.label :first_name%>
        <%= form.text_field :first_name%>
    </div>
    <div>
        <%= form.label :last_name%>
        <%= form.text_field :last_name%>
    </div>
    <div>
        <%= form.label :email%>
        <%= form.text_field :email%>
    </div>
    <div>
        <%= form.label :password%>
        <%= form.text_field :password%>
    </div>
    <div>
        <%= form.label :password_confirmation%>
        <%= form.text_field :password_confirmation%>
    </div>
    <%= form.submit "Sign Up"%>
<% end %> 
```



We now implement the `new` and `create` actions for the `UsersController`. Firstly, we add a user resources route:

```ruby
# config/routes.rb
get('/',{to:'welcome#index' , as: 'root'})

resources :users, only: [:new, :create]
```

open brower
```
http://localhost:3000/users/new
```

Then, we implement the new and create actions as standard ones with Rails CRUD.

```ruby
# app/controllers/users_controller.rb
class UsersController < ApplicationController
  def new
    @user = User.new
  end

  def create
    @user = User.new(user_params)
    if @user.save
      session[:user_id] = @user.id
      redirect_to root_path, notice: "Logged In!"
    else
      render :new
    end
  end

  private

  def user_params
    params.require(:user).permit(
      :first_name,
      :last_name,
      :email,
      :password,
      :password_confirmation
    )
  end
end
```



## *Complete the User Authentication system for your Amazon application as follows:

- At the top, display the current user name and a logout link if they are signed in or 
- display a sign up and a sign in link if they are not
- Enforce that the user must be signed in to create products or reviews
- Make sure to associate the created products and reviews to the user
- Display user names beside their reviews and their products

`controller\products_controller.rb` add 
``` ruby
before_action :authenticate_user! , except: [:index, :show]
```

`controller\products_controller.rb` add 
``` ruby
before_action :authenticate_user! , except: [:index, :show]
```


`products_controller.rb` add user

```
 @product.user = current_user
``` 


`reviews_controller.rb` add user

```
 @review.user = current_user
``` 
