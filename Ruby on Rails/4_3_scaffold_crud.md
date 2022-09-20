# rails g scaffold Post title:string body:text

```shell
rails g scaffold Post title:string body:text
```


Running via Spring preloader in process 43781
      invoke  active_record
      create    db/migrate/20211012020337_create_posts.rb
      create    app/models/post.rb
      invoke  resource_route
       route    resources :posts
      invoke  scaffold_controller
      create    app/controllers/posts_controller.rb
      invoke    erb
      create      app/views/posts
      create      app/views/posts/index.html.erb
      create      app/views/posts/edit.html.erb
      create      app/views/posts/show.html.erb
      create      app/views/posts/new.html.erb
      create      app/views/posts/_form.html.erb
      invoke    resource_route
      invoke    helper
      create      app/helpers/posts_helper.rb
      invoke    jbuilder
      create      app/views/posts/index.json.jbuilder
      create      app/views/posts/show.json.jbuilder
      create      app/views/posts/_post.json.jbuilder
      invoke  assets
      invoke    scss
      create      app/assets/stylesheets/posts.scss
      invoke  scss
      create    app/assets/stylesheets/scaffolds.scss



```shell
rails db:migrate
```
== 20211012020337 CreatePosts: migrating ======================================
-- create_table(:posts)
   -> 0.0066s
== 20211012020337 CreatePosts: migrated (0.0068s) =============================




 # invoke  active_record
  ###    create    db/migrate/20211012020337_create_posts.rb

```ruby
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

 ###     create    app/models/post.rb
```
class Post < ApplicationRecord
end
```

###    invoke  resource_route  config/routes.rb
       route    resources :posts       
```
 resources :posts
```
###      invoke  scaffold_controller
      create    app/controllers/posts_controller.rb
```ruby 
class PostsController < ApplicationController
  before_action :set_post, only: %i[ show edit update destroy ]

  # GET /posts or /posts.json
  def index
    @posts = Post.all
  end

  # GET /posts/1 or /posts/1.json
  def show
  end

  # GET /posts/new
  def new
    @post = Post.new
  end

  # GET /posts/1/edit
  def edit
  end

  # POST /posts or /posts.json
  def create
    @post = Post.new(post_params)

    respond_to do |format|
      if @post.save
        format.html { redirect_to @post, notice: "Post was successfully created." }
        format.json { render :show, status: :created, location: @post }
      else
        format.html { render :new, status: :unprocessable_entity }
        format.json { render json: @post.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /posts/1 or /posts/1.json
  def update
    respond_to do |format|
      if @post.update(post_params)
        format.html { redirect_to @post, notice: "Post was successfully updated." }
        format.json { render :show, status: :ok, location: @post }
      else
        format.html { render :edit, status: :unprocessable_entity }
        format.json { render json: @post.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /posts/1 or /posts/1.json
  def destroy
    @post.destroy
    respond_to do |format|
      format.html { redirect_to posts_url, notice: "Post was successfully destroyed." }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_post
      @post = Post.find(params[:id])
    end

    # Only allow a list of trusted parameters through.
    def post_params
      params.require(:post).permit(:title, :body)
    end
end
```


###   invoke    erb
####      create      app/views/posts
####      create      app/views/posts/index.html.erb
```erb
<p id="notice"><%= notice %></p>

<h1>Posts</h1>

<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Body</th>
      <th colspan="3"></th>
    </tr>
  </thead>

  <tbody>
    <% @posts.each do |post| %>
      <tr>
        <td><%= post.title %></td>
        <td><%= post.body %></td>
        <td><%= link_to 'Show', post %></td>
        <td><%= link_to 'Edit', edit_post_path(post) %></td>
        <td><%= link_to 'Destroy', post, method: :delete, data: { confirm: 'Are you sure?' } %></td>
      </tr>
    <% end %>
  </tbody>
</table>

<br>
```
<%= link_to 'New Post', new_post_path %>


#### create      app/views/posts/edit.html.erb
```erb
<h1>Editing Post</h1>

<%= render 'form', post: @post %>

<%= link_to 'Show', @post %> |
<%= link_to 'Back', posts_path %>
```

###   create      app/views/posts/show.html.erb
```erb
<p id="notice"><%= notice %></p>

<p>
  <strong>Title:</strong>
  <%= @post.title %>
</p>

<p>
  <strong>Body:</strong>
  <%= @post.body %>
</p>

<%= link_to 'Edit', edit_post_path(@post) %> |
<%= link_to 'Back', posts_path %>
```


###   create      app/views/posts/new.html.erb
```erb 
<h1>New Post</h1>

<%= render 'form', post: @post %>

<%= link_to 'Back', posts_path %>
```

###      create      app/views/posts/_form.html.erb
```erb 
<%= form_with(model: post) do |form| %>
  <% if post.errors.any? %>
    <div id="error_explanation">
      <h2><%= pluralize(post.errors.count, "error") %> prohibited this post from being saved:</h2>

      <ul>
        <% post.errors.each do |error| %>
          <li><%= error.full_message %></li>
        <% end %>
      </ul>
    </div>
  <% end %>

  <div class="field">
    <%= form.label :title %>
    <%= form.text_field :title %>
  </div>

  <div class="field">
    <%= form.label :body %>
    <%= form.text_area :body %>
  </div>

  <div class="actions">
    <%= form.submit %>
  </div>
<% end %>
```
 

###   invoke    resource_route
###   invoke    helper
###      create      app/helpers/posts_helper.rb
```erb
module PostsHelper
end
```
###      invoke    jbuilder
###      create      app/views/posts/index.json.jbuilder
```erb
json.array! @posts, partial: "posts/post", as: :post
```

###    create      app/views/posts/show.json.jbuilder
```erb
json.partial! "posts/post", post: @post      
```
###    create      app/views/posts/_post.json.jbuilder
```erb
json.extract! post, :id, :title, :body, :created_at, :updated_at
json.url post_url(post, format: :json)
```
###      invoke  assets
###      invoke    scss
###   create      app/assets/stylesheets/posts.scss
```
// Place all the styles related to the Posts controller here.
// They will automatically be included in application.css.
// You can use Sass (SCSS) here: https://sass-lang.com/
```
###      invoke  scss
      create    app/assets/stylesheets/scaffolds.scss
```
body {
  background-color: #fff;
  color: #333;
  margin: 33px; }

body, p, ol, ul, td {
  font-family: verdana, arial, helvetica, sans-serif;
  font-size: 13px;
  line-height: 18px; }

pre {
  background-color: #eee;
  padding: 10px;
  font-size: 11px; }

a {
  color: #000; }

a:visited {
  color: #666; }

a:hover {
  color: #fff;
  background-color: #000; }

th {
  padding-bottom: 5px; }

td {
  padding: 0 5px 7px; }

div.field,
div.actions {
  margin-bottom: 10px; }

#notice {
  color: green; }

.field_with_errors {
  padding: 2px;
  background-color: red;
  display: table; }

#error_explanation {
  width: 450px;
  border: 2px solid red;
  padding: 7px 7px 0;
  margin-bottom: 20px;
  background-color: #f0f0f0; }

#error_explanation h2 {
  text-align: left;
  font-weight: bold;
  padding: 5px 5px 5px 15px;
  font-size: 12px;
  margin: -7px -7px 0;
  background-color: #c00;
  color: #fff; }

#error_explanation ul li {
  font-size: 12px;
  list-style: square; }

label {
  display: block; }
```


# Destroy
Everyone is free to edit and make the necessary changes to their application so that it works as intended, even if it means completely removing scaffold. You can remove scaffold in the following way:

Generate scaffold: 
$rails generate scaffold Story
If you migrated your files, perform a rollback: 
```sh
$rake db:rollback
```
Destroy or undo scaffold: 
```sh
$rails destroy scaffold Story
```
By doing this, you will delete all the files created by the scaffold but additional changes that you may have done manually will not be removed.


## Create relationships when scaffolding
```sh
rails g scaffold Comment body:string author:string post:references
```