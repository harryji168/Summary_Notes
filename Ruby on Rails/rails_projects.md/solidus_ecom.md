# Solidus, Rails eCommerce System

https://github.com/solidusio/solidus

Getting started
Begin by making sure you have Imagemagick installed, which is required for Paperclip. (You can install it using Homebrew if you're on a Mac.)

To add Solidus, begin with a Rails 5.2, 6 or 6.1 application and a database configured and created.

Installing Solidus
In your application's root folder run:

bundle add solidus
bin/rails g solidus:install
And follow the prompt's instructions.

Accessing Solidus Store
Start the Rails server with the command:

bin/rails s
The solidus_frontend storefront will be accessible at http://localhost:3000/ and the admin can be found at http://localhost:3000/admin/.