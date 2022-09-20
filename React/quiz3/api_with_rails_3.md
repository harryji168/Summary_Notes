
###
# create folder

# create rails project
```
rails new biddr_api -T -d postgresql
```

# create react project
 ```
 create-react-app biddr_client
 ```

  
# create workspace
cd biddr_api
code .
add folder biddr_client
save f9.code.workspace

# init git

cd biddr_api
delete.sh
cd ../biddr_client
delete.sh
cd ..
create.sh https://github.com/harryji168/auction.git


## config api

/config/database.yml 
 database: biddr_api_9_development
/config/puma.rb 
 port ENV.fetch("PORT") { 5008 }


# copy Gemfile 
```
bundle
```




## config client
/src/requests.js

## switch to solution branch
```
git checkout -b solution
git add .
git commit -m "init solution"
git push --set-upstream origin solution
```
compare
amke pull, submit
https://github.com/harryji168/auction/pull/1



 
```
rails g model auction title:string  description:string ends_at:date reserve_price:integer
rails g model bid price:integer auction:references
rails g model user first_name:string last_name:string email:string password_digest:string  
rails g migration add_user_references_to_auctions user:references
rails g migration add_user_references_to_bids user:references
 
rails db:create
rails db:migrate
```
# update model
apps/models/auction.rb
apps/models/bid.rb
apps/models/user.rb



## create seeds
seeds
```
rails db:seed
```

api::V1::SessionsController

``` 
rails g controller api::v1::auctions --no-assets --no-helper
rails g controller api::v1::bids --no-assets --no-helper
rails g controller api::v1::sessions --no-assets --no-helper
rails g controller api::v1::users --no-assets --no-helper
```
rails g serializer auction
# /app/serializer/auction_serializer.rb 

# /config/initializers/cors.rb  not showup    manually add 
    allow do
      origins 'http://127.0.0.1:5508', 'localhost:5508'#whitelist domains
      resource(
          '/api/*',  #limit requests to paths that look like /api
          headers: :any,  #allow the request to contain any headers
          credentials: true, #allow to send and save cookies between domains with CORS
          methods: [:get, :post, :patch, :put, :options, :delete]) #allo these http verbs
    end
  
  
# routes.rb
# app/controllers/application_controller.rb
# app/controllers/api/application_controller.rb
 




check 
http://[::1]:5009/api/v1/auctions/
http://[::1]:5009/api/v1/auctions/1

# error  process
routes.rb
```

```



react
 

# react 

 ## package.json
 "dependencies":
 
"start": "PORT=5508 react-scripts start",

## run npm install

 app.js
 app.css



 ## indx.html
add boostrap 


## src/components

# requests.js