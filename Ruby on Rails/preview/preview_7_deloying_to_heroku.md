# Deploying to Heroku
Heroku is one of the easiest ways to take your Rails application live. Here are the steps to deploy your application to Heroku.

## Git
Heroku deploys with Git so make sure that you have added git to you project. You can follow a tutorial or previous notes to do that.

## Create an Account
Create an account on Heroku: [http://heroku.com/](http://heroku.com/)

## Download the Heroku Toolbelt
The toolbelt makes deploying to Heroku much easier: [http://toolbelt.heroku.com/](http://toolbelt.heroku.com/)

## Add the `rails_12factor` Gem
Adding the `rails_12factor` gem helps in some aspect of taking your application live: [https://github.com/heroku/rails_12factor](https://github.com/heroku/rails_12factor):

```ruby
gem 'rails_12factor', group: :production
```
Then run `bundle` to install the gem.

## Create Heroku Project
Once your ready and made your last commit. Start by creating an app on Heroku:
```shell
heroku create my-awesome-app
```
Note that the name of your app such as `my-awesome-app` must be a valid subdomain name and it must unique at Heroku. Your application URL will be `http://my-awesome-app.herokuapp.com`.

When you first use Heroku on a computer, it will ask you for your Heroku email and password. Heroku will usually set up public keys so you don't have to re-enter email/password every time.

## Run Migrations
Heroku doesn't automatically run migrations for you so run migrations there from you machine:
```shell
heroku run rake db:migrate
```
Now you should be able to visit your app at `http://my-awesome-app.herokuapp.com`.

## Logs
If you want to display logs live to help you debug you can run:
```shell
heroku logs --tail
```