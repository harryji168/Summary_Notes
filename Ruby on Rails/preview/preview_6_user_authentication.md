# User Authentication

## Add User Model

To build user authentication system we start by creating a user model. We do so by running the Rails generator:

```sh
rails g model user first_name:string last_name:string email:string:index password_digest:string 
```

Before running `rails db:migrate` we can optionally add an index on the `email` field in the migration. This is recommended, because we will be searching users by email often. Having an index on the `email` field speeds up such queries. We can optionally add `unique: true` option to the index which enforces uniqueness at the database level.

```ruby
# db/migrate/???_create_users.rb
class CreateUsers < ActiveRecord::Migration
  def change
    create_table :users do |t|
      t.string :first_name
      t.string :last_name
      t.string :email
      t.string :password_digest
      t.timestamps null: false
    end
    add_index :users, :email, unique: true
  end
end
```

## Call `has_secure_password` in User Model

We call the `has_secure_password` method in the `User` model. This adds a few features to the model:

```ruby
class User < ApplicationRecord
  has_secure_password
  # ...
end
```

* Adds attribute accessors to the user model for `password` and `password_confirmation`
* Validates presence of `password` and password matching with `password_confirmation` if present
* Encrypts the `password` and stores it in password_digest using the `bcrypt` gem

For more details on this method checkout [this link](http://api.rubyonrails.org/classes/ActiveModel/SecurePassword/ClassMethods.html#method-i-has_secure_password).

In order for this method to work we have to have the `bcrypt` gem added to our `Gemfile`. The gem is commented out by default with a new Rails project so we just uncomment that line and run `bundle` in our terminal.

## Implement the `UsersController` Actions

We now implement the `new` and `create` actions for the `UsersController`. Firstly, we add a user resources route:

```ruby
# config/routes.rb
resources :users, only: [:new, :create]
```

Then, we implement the new and create actions as standard ones with Rails CRUD.

```ruby
# app/controllers/users_controller.rb
class UsersController < ApplicationController
  def new
    @user = User.new
  end

  def create
    @user = User.new user_params
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


After that, we implement the `new.html.erb` template.

```html
<!-- app/views/users/new.html.erb -->
<h1>Sign Up</h1>

<% if @user.errors.any? %>
  <ul>
    <% @user.errors.full_messages.each do |msg| %>
      <li><%= msg %></li>
    <% end %>
  </ul>
<% end %>

<%= form_for @user do |f| %>
  <div>
    <%= f.label :first_name %>
    <%= f.text_field :first_name %>
  </div>
  <div>
    <%= f.label :last_name %>
    <%= f.text_field :last_name %>
  </div>
  <div>
    <%= f.label :email %>
    <%= f.email_field :email %>
  </div>
  <div>
    <%= f.label :password %>
    <%= f.password_field :password %>
  </div>
  <div>
    <%= f.label :password_confirmation %>
    <%= f.password_field :password_confirmation %>
  </div>
  <%= f.submit %>
<% end %>
```

## Implement the `SessionsController`

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

<%= form_tag sessions_path do %>
  <div>
    <%= label_tag :email %>
    <%= email_field_tag :email %>
  </div>
  <div>
    <%= label_tag :password %>
    <%= password_field_tag :password %>
  </div>
  <div>
    <%= submit_tag "Log In" %>
  </div>
<% end %>
```

## Implement the `SessionsController` Destroy action

We start by adding the destroy routes in our `routes.rb` file. We can make as a standard destroy route which means that we will need to have an `:id` in the route. This is not really needed or recommended in the case of the user. We have the user id stored in the `session` so we shouldn't make it part of the url. Also, it’s generally advisable to hide the user id whenever possible for security reasons.

We can accomplish this by adding the destroy route with `on: :collection` option which creates the route without requiring an `:id` or `:user_id` in it.

```ruby
# config/routes.rb
resource :sessions, only: [:new, :destroy, :create]
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
before_action :authenticate_user!, except: [:index, :show]
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

## Implement Questions belonging to Users

Once the `Users` table has been created we can relate a `Question` to a user at the database level by creating a migration to add a foreign key on the `Questions` table.

```sh
rails g migration add_user_references_to_questions user:references
```

This will generate a migration file like the following:
```ruby
class AddUserReferencesToQuestions < ActiveRecord::Migration[5.2]
  def change
    add_reference :questions, :user, foreign_key: true
  end
end
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

```sh
rails g add_user_references_to_questions user:references
```

```ruby
# db/migrate/???_add_user_references_to_questions.rb
class AddUserReferencesToQuestions < ActiveRecord::Migration[5.0]
  def change
    add_reference :questions, :user, foreign_key: true
  end
end
```

Show user in `Question#show`.
