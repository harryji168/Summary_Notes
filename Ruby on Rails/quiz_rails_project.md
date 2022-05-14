# Basic on previous Project idea_factory
 
## create a project by running this command:

```shell
rails new idea_factory -d postgresql
cd idea_factory

code .
```


## edit `Gemfile` 

```
gem 'cancancan', '~> 3.2', '>= 3.2.1'
gem 'bcrypt', '~> 3.1.7'

gem 'bootsnap', '>= 1.4.4', require: false
gem 'bootstrap', '~> 4.6.0'
gem 'cowsay', '~> 0.3.0'
gem 'faker', :git => 'https://github.com/faker-ruby/faker.git', :branch => 'master'

```

```
group :development, :test do
  # Call 'byebug' anywhere in the code to stop execution and get a debugger console
  gem 'byebug', platforms: [:mri, :mingw, :x64_mingw] 
  gem 'rspec-rails'
  gem 'faker'
  gem 'factory_bot_rails'
  gem 'rails-controller-testing'
end
```

 
 
run
```shell
bundle install
bundle fund
bundle
```

# add boostrap to Rails 

```sh
yarn add bootstrap@next jquery @popperjs/core
```
```
bundle exec rake webpacker:install
```


in `/app/assets/stylesheets/application.css` 

add 
``` 
@import "bootstrap" ;
@import "ideas";
```

rename to application.scss



## test browser  shouw rails logo
rails s
```
http://localhost:3000/
``` 

# init project
 

### initiate new git file

```sh
git init
```
```
curl https://www.toptal.com/developers/gitignore/api/node,linux,rails,macos,windows > .gitignore
```

add all current file and folder
```sh
git add .
```

add commit messagegit

```sh
git commit -m "init project"
```

change to main branch
```sh
git branch -M main
```

### create repository on github.com

click new
![Screenshot from 2021-10-11 08-05-03](https://user-images.githubusercontent.com/21187699/136813331-171f0b1c-6e30-421d-a543-8a5c68a16f7b.png)


click create repository

![Screenshot from 2021-10-11 08-08-38](https://user-images.githubusercontent.com/21187699/136814744-7685c82f-b6c6-4d2b-afe1-b24bf8bdf3e6.png)

click code, copy Https 

![Screenshot from 2021-10-11 08-12-51](https://user-images.githubusercontent.com/21187699/136814541-628c5be8-0e09-46fa-8535-4a4974e1ec1a.png)


### add your remote repository 
```sh
git remote add origin https://github.com/harryji168/Quiz_ideas.git
```

### force push the project
```sh
git push -u origin main --force
```

### make solution branch 


### check yo branch
```shell
git checkout -b solution
```

make some change in file


```sh
git add .
```

add commit messagegit

```sh
git commit -m "init solution"
```

### push file
```shell
git push --set-upstream origin solution
```
 
create pull 

https://github.com/harryji168/Quiz_ideas/pull/1/commits

![Screenshot from 2021-10-25 10-15-38](https://user-images.githubusercontent.com/21187699/138740728-e129b9cf-320b-48e5-822a-ec792a85ea41.png)


### submit link
https://docs.google.com/forms/d/1L6iHrX3IyjmaEYE7X0DVwJ5kCihqDXbY1_-XmUkzQ0g/edit

![Screenshot from 2021-10-25 10-19-29](https://user-images.githubusercontent.com/21187699/138741070-447afc52-6918-484c-9fa9-d01d24b77a21.png)

###  after click submit button

![Screenshot from 2021-10-25 10-20-05](https://user-images.githubusercontent.com/21187699/138741179-3b196d15-c5fa-4f23-9d43-2a91aee4386d.png)


### create database


```
rails db:create
```
>database settings in `config\database.yml`, could change database, and run `rails db:reset`


###  create table `/db/migrate/20210131050859_create_ideas.rb`

```shell
rails g model idea title:string description:text  
```



###  create table `/db/migrate/20210131050859_create_users.rb`

```shell
rails g model user first_name:string last_name:string email:string password_digest:string  
```
```
  create_table :users do |t|
      t.string :first_name
      t.string :last_name
      t.string :email , index:{unique: true}
      t.string :password_digest

      
      t.timestamps
```

```
rails g migration add_user_references_to_ideas user:references
```

```
rails g migration add_is_admin_to_users is_admin:boolean
```
  
```
    add_column :users, :is_admin, :boolean, default: false
```    
 
###  create table `/db/migrate/20210131050859_create_reviews.rb`

```
rails g model review body:text idea:references user:references 
```

 
###  create table `/db/migrate/20210131050859_create_likes.rb`

```
rails g model like idea:references user:references 
```

###  create table `/db/migrate/20210131050859_create_joins.rb`

```
rails g model join  idea:references user:references 
```



 
### run migration
```sh 
rails db:migrate
```

### edit `/app/models/idea.rb`

```ruby 
    validates :title, presence: true, uniqueness: true
    validates :description, presence: true

    has_many :reviews, dependent: :destroy
    belongs_to :user, optional: true

    # many to many association
    has_many :likes, dependent: :destroy
    has_many :likers, through: :likes  , source: :user

    has_many :joins, dependent: :destroy
    has_many :joiners, through: :joins  , source: :user


    def self.all_with_review_counts
        self.left_outer_joins(:reviews)
            .select("ideas.*","Count(reviews.*) AS reviews_count")
            .group('ideas.id')
    end

```
### edit `/app/models/user.rb`

```
    has_secure_password

    has_many :ideas, dependent: :nullify
    has_many :reviews, dependent: :nullify


    # many to many association
    has_many :likes
    has_many :liked_ideas, through: :likes, source: :idea

    has_many :joins
    has_many :joined_ideas, through: :joins, source: :idea

    validates :first_name, presence: true {message: "first name must be provided"}
    validates :last_name, presence: true  {message: "last name must be provided"}
    validates :email, format: { with: /(\A([a-z]*\s*)*\<*([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\>*\Z)/i }, uniqueness: { case_sensitive: false },  presence: true 
    validates :password, presence: true

    has_secure_password
    def full_name
        "#{first_name} #{last_name}"
    end
```    



### edit `/app/models/review.rb`

```
class Comment < ApplicationRecord
  belongs_to :idea
  belongs_to :user, optional: true
  validates :body, presence: true 
end
```
### edit `/app/models/like.rb`
```
class Like < ApplicationRecord
  belongs_to :idea
  belongs_to :user

  validates(
    :idea_id,
    uniqueness:{
        scope: :user_id,
        message: 'has already been liked'
    }
  )
end
```

### edit `/app/models/join.rb`
```
class Like < ApplicationRecord
  belongs_to :idea
  belongs_to :user

  validates(
    :idea_id,
    uniqueness:{
        scope: :user_id,
        message: 'has already been liked'
    }
  )
end
```






## add cancan:ability

```
rails g cancan:ability
```

### edit ability.rb file
add 
```
    alias_action(:create, :read, :update,:delete, to: :crud)

    can(:crud, Idea) do |idea|
      user==idea.user
    end


    can(:crud, Review) do |review|
      user==review.user
    end


    can(:like, Idea) do |idea|
      user.persisted? && idea.user != user
    end
    can(:destroy, Like) do |like|
      like.user == user
    end


    can(:join, Idea) do |idea|
      user.persisted? && idea.user != user
    end
    can(:destroy, Join) do |join|
      join.user == user
    end
```


### edits seed.rb
 
 
### run seeds  file

```
rails db:seed
```
# push git
```sh
git add .
```

add commit message

```sh
git commit -m "create models"
```

push to github

```sh
git push
```

### edit routes.rb
``` ruby 
 root "ideas#index"
  resources :ideas do
    resources :likes, shallow: true, only: [:show, :create, :destroy]
    get :liked, on: :collection
    resources :joins, shallow: true, only: [:show, :create, :destroy]
    get :joined, on: :collection
    resources :reviews
  end

  resources :users, only:[:new, :create]
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
rails g controller ideas
```


```shell
rails g controller users --no-helper --no-assets
```

```shell
rails g controller reviews
```
 
```sh 
rails g controller sessions --no-helper --no-assets
```

```sh
rails g controller likes
rails g controller joins
```



# push git for controller 
```sh
git add .
```

add commit message

```sh
git commit -m "create controller"
```

push to github

```sh
git push
```


### views 

## create `shared` folder under views 

`/shared/_navbar.html.erb`
`/shared/_alert.html.erb`
`/shared/_form.html.erb`

##### edit `app/views/layouts/application.html.erb`
```
    <%= render"/shared/navbar"%>
    <%= render"/shared/alert"%>
```     

#### `app/views/ideas/`
 `app/views/ideas/index.html.erb` 

 `app/views/posts/new.html.erb`

 `app/views/posts/edit.html.erb`

 `app/views/posts/show.html.erb`
 
### `app/views/sessions/`
`new.html.erb`
 
### `app/views/users/`
`new.html.erb`
`index.html.erb`
`dashboard.html.erb`
 
### `app/views/likes/`
`show.html.erb`

### `app/views/joins/`
`show.html.erb`


# logo
`app\assets\images\logo\webp`

logo.webp


# customer css
```
 @import "ideas";
```
```
html {
    padding: 2rem;
  }
  
.border-btm{
    border-bottom: 2px solid
}

.border-all{
    border: 2px solid
}

.new-idea{
    position:relative;
    left: 1.2em;
}

.min-height{
    min-height: 100vh;
}
```



# push git
```sh
git add .
```

add commit message

```sh
git commit -m "create Views"
```

push to github

```sh
git push
```


### general test file

rails generate rspec:install

generate controller

```
rails g rspec:controller ideas --controller-specs --no-request-specs
```
```
rails g factory_bot:model ideas
```

## edit factories data `spec\factories`

`ideas.rb`
`users.rb`



```run testing
rspec -f d ./spec/controllers/ideas_controller_spec.rb 
```




# push git
```sh
git add .
```

add commit message

```sh
git commit -m "testing"
```

push to github

```sh
git push
```


use file compare to find where is different


fixed error


# push git
```sh
git add .
```

add commit message

```sh
git commit -m "fixed error"
```

push to github

```sh
git push
```



# push git
```sh
git add .
```

add commit message

```sh
git commit -m "fixed error"
```

push to github

```sh
git push
```

git commit -m "Part 1 double_check & document"


https://github.com/harryji168/Quiz_ideas/pull/1/commits


![Screenshot from 2021-10-25 15-41-06](https://user-images.githubusercontent.com/21187699/138780681-21ea74b6-fe28-4e7e-97c0-45dac16aa9f3.png)


# Testing fixed ERROR: null value in column "user-id" violates not-null constraint

in `factories\ideas.rb`  because  null user_id 

add 
```
association(:user, factory: :user)
```
