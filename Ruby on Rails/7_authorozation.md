# Cancancan

## in `gemil file  add 
```ruby
gem 'cancancan', '~> 1.15'
```

## run bundle
```
bundle
```

## add cancan:ability

```
rails g cancan:ability
```

### edit ability.rb file
```
class Ability
  include CanCan::Ability

  def initialize(user)
    # Define abilities for the passed in user here. For example:
    #
    #   user ||= User.new # guest user (not logged in)
    #   if user.admin?
    #     can :manage, :all
    #   else
    #     can :read, :all
    #   end
    #
    # The first argument to `can` is the action you are giving the user
    # permission to do.
    # If you pass :manage it will apply to every action. Other common actions
    # here are :read, :create, :update and :destroy.
    #
    # The second argument is the resource the user can perform the action on.
    # If you pass :all it will apply to every resource. Otherwise pass a Ruby
    # class of the resource.
    #
    # The third argument is an optional hash of conditions to further filter the
    # objects.
    # For example, here the user can only update published articles.
    #
    #   can :update, Article, :published => true
    #
    # See the wiki for details:
    # https://github.com/CanCanCommunity/cancancan/wiki/Defining-Abilities

    alias_action(:create, :read, :update, :destroy, to: :crud)

    can(:crud, Question) do |question|
      user == question.user
    end

    can(:crud, Answer) do |answer|
      user == answer.user
    endk
    
  end
end
```
### modify `questions_controller.rb`

before add

```
 before_action :authorize_user!, only: [:update , :destroy ]
 ```

 after add 

```
def authorize_user!
      ## redirect_to root_path, alert: "Not Authorized!" unless can?([:update,:destroy], @question)

      redirect_to root_path, alert: "Not Authorized!" unless can?(:crud, @question)
   
end
```


### modify  `answer_controller.rb`

before add

```
 before_action :authorize_user!, only: [:update , :destroy ]
 ```

after add 

```
    private

    def find_question
        @question = Question.find params[:question_id]
    end    

    def find_answer
        @answer = Answer.find params[:id]
    end

    def answer_params
        params.require(:answer).permit(:body)
    end
    
    def authorize_user!
        redirect_to root_path, alert: 'Not Authorized' unless can?(:crud, @answer)
    end
```    

# setup Super_user

```sh
rails g migration add_is_admin_to_users is_admin:boolean
```

```sh
rails db:migrate
```

# set seed file

```
# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the bin/rails db:seed command (or created alongside the database with db:setup).
#
# Examples:
#
#   movies = Movie.create([{ name: 'Star Wars' }, { name: 'Lord of the Rings' }])
#   Character.create(name: 'Luke', movie: movies.first)
# delete
# destroy
User.destroy_all
Answer.destroy_all
Question.destroy_all

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

20.times do
    created_at = Faker::Date.backward(days:365 * 5)

    q = Question.create(
       title: Faker::Hacker.say_something_smart,
       body: Faker::ChuckNorris.fact,
       view_count: rand(100_000),
       created_at: created_at,
       updated_at: created_at,
       user: users.sample
    )
    if q.valid?
        rand(1..5).times do
            Answer.create(body:Faker::Hacker.say_something_smart, question:q, user: users.sample)
        end
    end
end

questions = Question.all
answers = Answer.all

puts Cowsay.say("Generated #{questions.count} questions", :frogs)
puts Cowsay.say("Generated #{answers.count} answers", :cow)
puts Cowsay.say("Generated #{users.count} users", :koala)
```

run seeds file

```
rails db:seed
```
or 

```
rails db:reset
```


# install boostap 
```
gem 'bootstap', '>= 4.6.0', require: false
```

``` 
yarn add bootstrap@4.6.0 jquery popper.js
```

check package.json

environment.js
```
const { environment } = require('@rails/webpacker')
const webpack = require("webpack")
environment.plugins.append("Provide", new webpack.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery',
    Popper: ['popper.js', 'default']
}))
module.exports = environment
```

change rename application.css to  application.scss

add
```
@import "bootstrap"
```



test 

console.log("hello from app/js/packs/application.js");

$(function () {
    console.log($("nav")[0]);
})




# add jquery button to  application.html.erb

<% if flash[:notice].present?%>
        <div class="alert alert-success aler-dismissible fade show" role="alert">
          <%= flash[:notice]%>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
          </button>
        </div>
<% eleif flash[:alert].present?%>


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