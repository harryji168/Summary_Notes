# Setting Up Active Admin
ActiveAdmin is good for quickly setting up an admin panel with your website, it enables admins to do `CRUD` operations for models. It also has features that enable filtering and searching for records. You can learn more about it by visiting [their website](http://activeadmin.info/).
Keep in mind that ActiveAdmin uses `devise` for its user authentication, `kaminari` for pagination and `formtastic` for generating forms. Make sure that these don't conflict with other gems you have installed. For instance `will_paginate` may conflict with `kaminari`.
Start by adding `active_admin` gem to your `Gemfile`:
```ruby
# Gemfile
gem 'activeadmin'
```
After running `bundle` generate the Active Admin files by running their generator:
```shell
rails generate active_admin:install
```
This will generate configuration files and two migration files to store the admin user records (with `devise`) and admin comments. Migrate the database:
```shell
rails db:migrate
```
To enable have `CRUD` functionality for a model in the admin panel, generate the resource for the model as in:
```shell
rails generate active_admin:resource campaign
```
This will generate a file `app/admin/campaign.rb` that looks like:
```ruby
ActiveAdmin.register Campaign do
  # Some comments / instructions here..
end
```
This file can configure what you can do with that model, what the form looks like and what you can search and filter on. One thing to note is that if you want to enable creating or updating a record from the admin panel you must add the list of permitted parameters:
```ruby
ActiveAdmin.register Campaign do

  permit_params do
    [:title, :description, :goal, :end_date]
  end

end
```
This enables creating and updating the following the parameters: `:title`, `:description`, `:goal` and `:end_date`.

## Accessing Active Admin Panel
To access Active Admin panel visit `http://localhost:3000/admin` assuming you're running locally on port `3000`. You will need to have an admin account created. It's best to use the Rails Console to create one, you can do it using the following in the Rails Console:
```ruby
AdminUser.create(email: "tam@codecore.ca", password: "supersecret")
```
Finally, you may want to `stub` the `Active Admin` styles from your `app/assets/stylesheets/application.css`:
```css
/*
*= require_tree .
*= stub active_admin
*= require_self
*/
```
This avoids having conflicts between your styles and `active_admin` styles.