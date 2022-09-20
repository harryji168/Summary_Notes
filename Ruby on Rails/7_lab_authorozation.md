# Cancancan

## in `gemil file  add 
```ruby
gem 'cancancan', '~> 1.15'
```

## run bundle
```
bundle
```
## run yarn
```
yarn add bootstrap@4.6.0 jquery popper.js
```

## change rename application.css to  application.scss

add
```
@import "bootstrap"
```


## general ability.rb
```sh
rails g cancan:ability
```
## change app/models/ability.rb
```ruby in front 
    user ||= User.new # guest user (not logged in)

    if user.is_admin?
      can :manage, :all  # manage means they can do everything (not just CRUD)
    end
```    

``` in back
  alias_action(:create, :read, :update, :destroy, to: :crud)

    can(:crud, Question) do |question|
      user == question.user
    end

    can(:crud, Answer) do |answer|
      user == answer.user
    end
```
### environment.js 
`config/webpack/environment.js`
```ruby add 
environment.plugins.append("Provide", new webpack.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery',
    Popper: ['popper.js', 'default']
}))

```



### change user.rb
```
    has_many :answers, dependent: :destroy
    has_many :questions, dependent: :destroy
 ```

###  change application.html.erb
```erb
  <% if flash[:notice].present?%>
        <div class="alert alert-success aler-dismissible fade show" role="alert">
          <%= flash[:notice]%>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
          </button>
        </div>
    <% elsif flash[:alert].present?%>
      <div class="alert alert-danger aler-dismissible fade show" role="alert">
          <%= flash[:alert]%>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
          </button>
        </div>
    <% end %>
```
## change show.html.erb
```erb
<% if can?(:crud, @question)%>
<%= link_to("Delete", question_path(@question.id), method: :delete, data: {confirm: "Are you sure"}) %>

<%= link_to("Edit", edit_question_path(@question.id)) %>
<% end %>
```
 
## add admin user

```sh
rails g migration add_is_admin_to_users is_admin:boolean
```

```sh
rails db:migrate
```

## db/migrate/20211013175810_add_is_admin_to_users.rb
```
class AddIsAdminToUsers < ActiveRecord::Migration[6.1]
  def change
    add_column :users, :is_admin, :boolean
  end
end
```



## seeds.rb

```
User.destroy_all
PASSWORD = '123'

super_user = User.create(
    first_name: "Admin",
    last_name: "User",
    email: "admin@user.com",
    password: PASSWORD,
    is_admin: true
)

5.times do 
    first_name = Faker::Name.first_name
    last_name = Faker::Name.last_name
    User.create(
        first_name:first_name,
        last_name: last_name,
        email: "#{first_name}@#{last_name}.com",
        password: PASSWORD
    )
end

users = User.all
```


```
  updated_at: created_at,
  user: users.sample
```


## check package.json

```
 "bootstrap": "4.6.0",
    "jquery": "^3.6.0",
    "popper.js": "^1.16.1",
```    


## run seeds
```sh
rails db:seed
```

or 

```sh
rails db:reset
```

### products_controller.rb

```ruby
  before_action :authorize_user!, only: [:update, :destroy]

```

```ruby
 def authorize_user!
        redirect_to root_path, alert: "Not Authorized!" unless can?(:crud, @question)
 end
 ```   

## reviews_controller.rb 




# https://devcenter.heroku.com/articles/heroku-cli
```
sudo snap install --classic heroku
```


```
heroku login
```

error: src refspec master does not match any
error: failed to push some refs to 'https://git.heroku.com/awesome16888.git'


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