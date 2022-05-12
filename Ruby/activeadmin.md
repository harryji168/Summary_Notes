Installation
Active Admin is a Ruby Gem.

gem 'activeadmin'

# Plus integrations with:
gem 'devise'
gem 'cancancan'
gem 'draper'
gem 'pundit'
More accurately, it’s a Rails Engine that can be injected into your existing Ruby on Rails application.

Setting up Active Admin
After installing the gem, you need to run the generator. Here are your options:

If you don’t want to use Devise, run it with --skip-users:

rails g active_admin:install --skip-users
If you want to customize the name of the generated user class, or if you want to use an existing user class, provide the class name as an argument:

rails g active_admin:install User
Otherwise, with no arguments we will create an AdminUser class to use with Devise:

rails g active_admin:install
The generator adds these core files, among others:

app/admin/dashboard.rb
app/assets/javascripts/active_admin.js
app/assets/stylesheets/active_admin.scss
config/initializers/active_admin.rb
Now, migrate and seed your database before starting the server:

rails db:migrate
rails db:seed
rails server
Visit http://localhost:3000/admin and log in as the default user:

User: admin@example.com
Password: password
Voila! You’re on your brand new Active Admin dashboard.

To register an existing model with Active Admin:

rails generate active_admin:resource MyModel
This creates a file at app/admin/my_model.rb to set up the UI; refresh your browser to see it.
```
git clone https://github.com/activeadmin/activeadmin
```

```
gem build activeadmin.gemspec
```
