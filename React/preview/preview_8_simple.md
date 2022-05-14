_# SimpleForm with Rails Summary Notes
Forms are a very common element of all web application so it's a good idea to have easy ways to generate forms. Rails comes with excellent views helpers: `form_tag` and `form_for` that help us generate forms. That said, there are even easier ways to generate forms using the `SimpleForm` gem. There is also another gem `Formtastic` that does something similar.

## Setting Up
We start setting up SimpleForm by adding the gem to our `Gemfile`:
```
gem 'simple_form'
```
Then run `bundle` to install the gem. Then run
```
rails generate simple_form:install
```
or
```
rails generate simple_form:install --bootstrap
```
If you're using Bootstrap.

## Using SimpleForm
You can use `SimpleForm` by switching from using `form_for` to `simple_form_for` and using `f.input`. So a regular Rails form may look like this:
```erb
<%= @q.errors.full_messages.join(", ") %>
<%= form_for @q do |f| %>
  <div class="form-group">
    <%= f.label(:title) %>
    <%= f.text_field(:title, {class: "form-control"}) %>
    <p class="help-block">Enter a title describing your question</p>
  </div>
  <div class="form-group">
    <%= f.label(:body) %>
    <%= f.text_area :body, class: "form-control" %>
  </div>
  <div class="form-group">
    <%= f.collection_check_boxes :tag_ids, Tag.order(:name), :id, :name  %>
  </div>
  <%= f.submit({class: "btn btn-primary"}) %>
<% end %>
```
Now it will look like this in SimpleForm:
```erb
<%= simple_form_for @q do |f| %>
  <%= f.input :title, placeholder: "at least 3 characters.." %>
  <%= f.input :body, hint: "put details for the question" %>
  <%= f.association :tags, as: :check_boxes %>
  <%= f.submit({class: "btn btn-primary"}) %>
<% end %>
```
Note in the example above we were using standard Bootstrap classes for the `div` around the `label` and `text_field`. This will be done automatically with SimpleForm. No need to do that manually. 

Note that `SimpleForm` integrates nicely with `CarrierWave` and `PaperClip` so that you can use the same syntax for file fields. Also note that SimpleForm also adds the following things by default:
- Errors: will display underneath each field so you won't need to manually display them yourself
- Requires asterisks: it will figure out the requires fields from your ActiveRecord models