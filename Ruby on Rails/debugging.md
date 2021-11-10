# Debugging

## byebug 

#### check byebug exisit?

```ruby
#Gemfile have this 
group :development, :test do
  # Call 'byebug' anywhere in the code to stop execution and get a debugger console
  gem 'byebug', platforms: [:mri, :mingw, :x64_mingw]
end
``` 
#### if no ,add the before lines in  Gemfile  
 After defining the gems you want to use, you will need to run:
 
```shell
bundle
```
####  how to use it 

add byebug in any ruby code
```ruby  
byebug
```

![Screenshot from 2021-10-10 14-35-13](https://user-images.githubusercontent.com/21187699/136713730-7e713e4e-4641-4c07-b5c5-10f2c50c8d65.png)


when run it, will stop this line in terminal

![Screenshot from 2021-10-10 14-35-40](https://user-images.githubusercontent.com/21187699/136713750-0dadce92-73e0-4556-87ed-25a0663a98d9.png)

you could test the values

![Screenshot from 2021-10-10 14-36-22](https://user-images.githubusercontent.com/21187699/136713759-e5641e5b-0aeb-46f8-a2fc-3c364d041566.png)

type continue and enter to run again
```ruby  
continue
```

![Screenshot from 2021-10-10 14-36-33](https://user-images.githubusercontent.com/21187699/136713765-39a48043-9163-40d2-9fd0-6cf9bbb432a4.png)

if don't want to run, just comment

![Screenshot from 2021-10-10 14-36-52](https://user-images.githubusercontent.com/21187699/136713794-7822fb18-6a47-4ffd-ad6d-fecbf180a774.png)



## Routing list  

type some wrong address in address bar, it will show all routings

```ruby  
http://localhost:3000/questionserret
```

![Screenshot from 2021-10-10 14-43-20](https://user-images.githubusercontent.com/21187699/136713846-86adccfe-663e-4c36-a194-7edaa1e3a67e.png)



## A server is already running. Check …/tmp/pids/server.pid. Exiting 

```sh
kill -9 $(lsof -i tcp:3000 -t)
```


## check log 

`log\development.log`


## delete not popup
no javascript , cause by
 
in `app\views\layouts\application.html.erb` 
comment 
```ruby
 <%# javascript_pack_tag 'application' %>
 ```

 ## Rails: Webpacker::Manifest::MissingEntryError in Home#index

 run
 ```sh
bundle exec rake webpacker:install
```
https://stackoverflow.com/questions/54113179/rails-webpackermanifestmissingentryerror-in-homeindex



## ActiveRecord::RecordNotUnique in UsersController#create

check database

![Screenshot from 2021-10-12 10-57-25](https://user-images.githubusercontent.com/21187699/137005970-7aaf1718-21eb-4c64-9523-ace28efb7b79.png)

already have record

![Screenshot from 2021-10-12 10-58-23](https://user-images.githubusercontent.com/21187699/137006073-a6f359b7-502f-441f-8bf2-2036ddb044f0.png)



# rails db:migrate== 20211012191947 AddUserReferencesToQuestions: migrating =====================
-- add_reference(:questions, :user, {:null=>false, :foreign_key=>true})
rails aborted!
StandardError: An error has occurred, this and all later migrations canceled:

PG::NotNullViolation: ERROR:  column "user_id" contains null values
/home/harry/awesome_current/awesome_answers/db/migrate/20211012191947_


![Screenshot from 2021-10-12 12-25-44](https://user-images.githubusercontent.com/21187699/137016947-d00ffac0-767d-4f8c-8c50-24610396e7f2.png)


recreate db

```sh
rails db:drop
rails db:create
rails db:migrate
```




## menu on bottom
change application.html.erb

```  this is content
<%= yield %>

```

## user must exit in create products

![Screenshot from 2021-10-12 15-05-25](https://user-images.githubusercontent.com/21187699/137035591-1d3efc58-eb22-4d88-94a6-4f8c14ea17d5.png)


`products_controller.rb` add user

```
 @product.user = current_user
``` 

## authorize in answer, not current_id
another routes question rails aborted!
ActiveModel::UnknownAttributeError: unknown attribute 'user' for Answer.

in `models` add

```
belongs_to :user 
```


## ailed to push some refs to git@heroku.com

```
git checkout -b masterbranch
```
```
git push heroku masterbranch
```


```
bundle lock --add-platform x86-mingw32 x86-mswin32 x64-mingw32 java
```

## How do I delete/destroy a Heroku application?
```sh
heroku apps:destroy awasome
```

## whereis ruby
```
whereis ruby
```
cd /home/harry/.rvm/rubies

## which ruby
/home/harry/.rvm/rubies/ruby-3.0.0/bin/ruby




## if no error, no fails when 

just go top
```
cd ..
```
then have error
![Screenshot from 2021-10-14 12-00-02](https://user-images.githubusercontent.com/21187699/137379430-06e4f84b-f53d-4cd1-a3c9-f17cd3f110f4.png)

fixed sentense then failure

![Screenshot from 2021-10-14 12-03-20](https://user-images.githubusercontent.com/21187699/137379843-03c0f315-4bd3-444d-81d4-ff4a5ace7afb.png)



# NoMethodError in UsersController#dashboard
undefined method `is_admin?' for nil:NilClass

change 
```
if current_user.is_admin?
```

to 

```
if current_user.try(:is_admin?)
```


# Testing fixed ERROR: null value in column "user-id" violates not-null constraint

in `factories\ideas.rb`  because  null user_id 

add 
```
association(:user, factory: :user)
```
