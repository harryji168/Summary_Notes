 
# Project Setup
Create a new Rails project, blog_on_rails, inside of a brand new directory.  To avoid git issues, you may create a new directory and a new repository that is 
 

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


# add boostrap to Rails 

```sh
yarn add bootstrap@next jquery @popperjs/core
```

In gemfile add
```
gem 'bootstrap', '~> 4.6.0'
```

run
```shell
bundle
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

###  create  `/db/migrate/20210131050859_create_posts.rb`

```shell
rails g model posts title:string body:text
```


```
class CreatePosts < ActiveRecord::Migration[6.1]
  def change
    create_table :posts do |t|
      t.string :title
      t.text :body

      t.timestamps
    end
  end
end

```
### create  `/db/migrate/20210131050859_create_posts.rb`

 one to many 
```shell 
rails g model comments body:text post:references
```


```
class CreateComments < ActiveRecord::Migration[6.1]
  def change
    create_table :comments do |t|
      t.text :body
      t.references :post, null: false, foreign_key: true

      t.timestamps
    end
  end
end
```

### run migration
```sh
rails db:migrate
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
```

### edit `/app/models/post.rb`

```
class Comment < ApplicationRecord
  belongs_to :post
  
  validates :body, presence: true;
end
```

### edit routes.rb
``` ruby
root "posts#index"
  resources :posts do
    resources :comments
  end
```




### make controller

```shell
rails g controller posts
```
```
 before_action :find_post, only:[:show, :edit, :update, :destroy]
    def new
        @post = Post.new
    end


    def create
        @post = Post.new post_params

        if @post.save
            flash[:notice]="Post created successfully"
            redirect_to post_path(@post.id)
        else
            render :new
        end
    end


    def index
        @posts = Post.all.order(created_at: :desc)
        
    end

    def show
        @comments = @post.comments.order(created_at: :DESC)
        @comment = Comment.new
    end

    def edit
     
    end

    def update
            if @post.update post_params
                redirect_to post_path(@post.id), notice: "Post edited"
            else
                render :edit
            end
    end

    def destroy
        if @post.destroy
            flash[:notice] = "The  post #{@post.title} has been destroyed"
            redirect_to posts_path
        else
            render :show
        end
    end


    private
    def post_params
        params.require(:post).permit(:title, :body)
    end

    def find_post
        @post = Post.find_by_id params[:id]
    end
```

### make comments

```shell
rails g controller comments
```

```
class CommentsController < ApplicationController
    before_action :find_post

    def create
        @comment =Comment.new comment_params
        @comment.post=@post
        @comment.save 
        redirect_to post_path(@post), notice: "Comment created"          
    end

    def destroy
        @comment = Comment.find params[:id]
        @comment.destroy
        redirect_to post_path(@post), notice: "Comment deleted"  
    end


    private
    def find_post
        @post = @post = Post.find_by_id params[:post_id]
    end

    def comment_params
        params.require(:comment).permit(:body)
    end
end
```


### views 

##### edit `app/views/layouts/application.html.erb`
```
    <%= render"/shared/navbar"%>
    <%= render"/shared/alert"%>
```     

##### add `app/views/posts/index.html.erb`

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