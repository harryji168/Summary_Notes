# Basic on previous Project blog_on_rails 

## create a project by running this command:

```shell
rails new blog_on_rails -T -d postgresql
cd blog_on_rails
```


## edit Gemfile
```
gem 'bootsnap', '>= 1.4.4', require: false
gem 'bootstrap', '~> 4.6.0'
```
``` 
gem 'cancancan', '~> 3.2', '>= 3.2.1'
gem 'bcrypt', '~> 3.1.7' 
```


```
group :development, :test do
  # Call 'byebug' anywhere in the code to stop execution and get a debugger console
  gem 'byebug', platforms: [:mri, :mingw, :x64_mingw] 
end
```

``` 
  gem 'spring'
  gem 'cowsay', '~> 0.3.0'
  gem 'faker'
```  

 
run
```shell
bundle
```

# add boostrap to Rails 

```sh
yarn add bootstrap@next jquery @popperjs/core
```




in `/app/assets/stylesheets/application.css` 

add 
```
 *= require bootstrap
```

rename to application.scss



### create database


```
rails db:create
```

###  create  `/db/migrate/20210131050859_create_users.rb`

```shell
rails g model user name:string email:string password_digest:string  
```
```
  create_table :users do |t|
      t.string :name
      t.string :email, index:{unique: true}
      t.string :password_digest

      t.timestamps
```

```
rails g migration add_user_references_to_comments user:references
```
```
rails g migration add_user_references_to_reviews user:references
````
```
rails g migration add_is_admin_to_users is_admin:boolean
```
  
```
    add_column :users, :is_admin, :boolean, default: false
```    

### run migration
```sh 
rails db:reset
```

### edit `/app/models/post.rb`

```ruby
 #validations for title
    # The title column must be present and unique.
    validates :title, presence: true, uniqueness:{ case_sensitive: false}

    #validations for body
    # The body column must be present and contain at least 50 characters.
    validates :body, presence: true, length:{minimum:50}

    #Association with comments => 1post, many comments
    has_many :comments, dependent: :destroy
#add
     belongs_to :user, optional: true
```

### edit `/app/models/comment.rb`

```
class Comment < ApplicationRecord
  belongs_to :post

  belongs_to :user, optional: true

  validates :body, presence: true;
end
```
### edit `/app/models/user.rb`

```
 validates :name, presence: true 
    validates :email, format: { with: /(\A([a-z]*\s*)*\<*([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\>*\Z)/i }, uniqueness: { case_sensitive: false },  presence: true 
    
    has_many :posts, dependent: :nullify
    has_many :comments, dependent: :nullify
    has_secure_password
```    



## add cancan:ability

```
rails g cancan:ability
```

### edit ability.rb file

     user ||= User.new # guest user (not logged in)
       if user.admin?
         can :manage, :all
       end  
alias_action(:create, :read, :update,:delete, to: :crud)

    can(:crud, Post) do |post|
      user == post.user
    end

    can(:crud, Comment) do |comment|
      user == comment.user
    end


    can(:crud, User) do |user|
      user == user.user
    end




### edit routes.rb
``` ruby
root "posts#index"
  resources :posts do
    resources :comments
  end

   resources :users do
    get('password', {to: "users#change_password"})
    post('password', {to: "users#change_password"})
  end

 

  resource :session, only:[:new, :create, :destroy]
```

### edit application_controller.rb
```
   def current_user
        @current_user ||= User.find_by_id session[:user_id]
    end

    helper_method(:current_user)

    def user_signed_in?
        current_user.present?
    end

    helper_method :user_signed_in?
    def authenticated_user!
        redirect_to new_session_path, notice: 'Please sign in' unless user_signed_in?
    end
```


### make controller

```shell
rails g controller posts
```
```  
```

### make comments

```shell
rails g controller comments
```

``` 
```

```shell
rails g controller users --no-helper --no-assets
```
 
`app/controllers/users_controller.rb`

```sh 
rails g controller sessions --no-helper --no-assets
```
`app/controllers/sessions_controller.rb` 


### views 

##### edit `app/views/layouts/application.html.erb`
```
    <%= render"/shared/navbar"%>
    <%= render"/shared/alert"%>
```     

##### add `app/views/posts/index.html.erb`
<div class="container justify-content-center">

```
<div class="container">
<div class="row">

<% @posts.each do |post|%>
<div class="card col-xs-11 col-sm-11 col-md-5 col-lg-3 col-xlg-3 m-4">
    <div class="card-body">
    <h2><%= link_to(post.title, post_path(post.id))%></h2>
    <p><%= post.body%></p>
    </div>
</div>
<%end%>

</div>
</div>
```

##### add `app/views/posts/new.html.erb`
```
<%= render"shared/form.html.erb"%>
```

##### add `app/views/posts/edit.html.erb`
```
<%= render"shared/form.html.erb"%>
```

##### add `app/views/posts/show.html.erb`
```
<div class="container">
    <h1><%= @post.title%></h1>
    <p><%= @post.body%></p>
    <p>Posted <%= time_ago_in_words(@post.created_at)%> ago</p>

    <div>
    <%= link_to("Edit", edit_post_path(@post.id), class:"btn btn-outline-primary")%>
    <%= link_to("Delete", post_path(@post.id), method: :delete, class:"btn btn-outline-primary")%>
    </div>

    <div class="mt-4">
        <%= form_with model: [@post, @comment], :class=>"form-group", local:true do |f|%>
            <h4><%= f.label:comment%></h4>
            <div class="input-group mb-2">
                <%= f.text_area:body,cols:90,rows:5,  placeholder: "What's on your mind?",  :class=>'form-control', :required=>true%>
            </div>
            <div>
                <%= f.submit :Submit, class:"btn btn-outline-primary"%>
            </div>
        <%end%>

    </div>

        <% @comments.each do |comment|%>
     
            <p class="d-flex flex-column mt-4"><%= comment.body%>
            <small>Commented <%= time_ago_in_words(comment.created_at)%> ago • &nbsp;
            <%= link_to("Delete", post_comment_path(@post.id, comment.id), method: :delete)%></small></span>
             </p>
    <%end%>
</div>
```

## create `shared` folder under views

#### `app/views/shared/_alert.html.erb`
```
<% if flash[:notice].present?%>
<div class="alert alert-success alert-dismissable fade show" role="alert">
    <%= flash[:notice]%>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

<% elsif flash[:alert].present?%>
<div class="alert alert-warning alert-dismissable fade show" role="alert">
    <%= flash[:alert]%>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>
<% end %>
```

#### add `app/views/shared/_navbar.html.erb`
```
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
<div class="navbar-brand">
    <%= link_to("Blog On Rails", root_path)%>
</div>
<div>
<%= link_to("Home", root_path)%>
|
<%= link_to("New Post", new_post_path)%>
</div>
</nav>
```
####  add `_form.html.erb` 

<div class="container mt-4">
<%= form_with model: @post, :class=>"form-group", local:true do |f|%>
    <%if @post.errors.any?%>
        <p><%= @post.errors.full_messages.join(", ")%></p>
    <%end%>
    <%= f.label :title%>
    <div class="input-group">
        
        <%= f.text_field :title, :class=>'form-control', :required=>true%>
    </div>
    <%= f.label :body%>
    <div class="input-group">
        
        <%= f.text_area :body, cols:50 , rows:5,  :class=>'form-control', :required=>true %>
    </div>
        <%= f.submit :class => 'btn btn-outline-primary mt-4'%>
<%end%>
</div>


### edits seed.rb
```

Comment.delete_all
Post.delete_all

NUM_POSTS = 50


NUM_POSTS.times do
    created_at = Faker::Date.backward(days: 365*5)
 
    p=Post.create(
        title: Faker::Lorem.sentence(word_count: 3),
        body:Faker::Lorem.sentence(word_count: 100),
        created_at: created_at, 
        updated_at: created_at  
)
if p.valid?

    p.comments = rand(0..10).times.map do
        Comment.new(
            body: Faker::TvShows::GameOfThrones.quote,
            created_at: Faker::Date.between(from: created_at, to: Date.today)
        )
        
    end
    puts p.errors.full_messages
end
end

posts = Post.all
comments = Comment.all
puts Cowsay.say("Generated #{posts.count} posts", :cow)
puts Cowsay.say("Generated #{comments.count} comments", :koala)
```


### run seeds  file

```
rails db:seed
```
 

### general test file

rails generate rspec:install