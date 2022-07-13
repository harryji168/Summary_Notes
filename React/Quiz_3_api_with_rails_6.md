
###
# create folder
# create rails project
```
rails new biddr_api -T -d postgresql -skip-git
```

# create react project
 ```
 create-react-app biddr_client
 ```
  
# create workspace
cd biddr_api
code .
add folder to workspace 
biddr_client
save quiz3.code.workspace

# init git
# goto github
create repository quiz_auction

cd biddr_api
delete.sh
cd ../biddr_client
delete.sh
cd ..


create.sh https://github.com/harryji168/quiz_auction.git


## config api

/config/database.yml 
 database: biddr_api_development
/config/puma.rb 
 port ENV.fetch("PORT") { 6001 }
rails

# copy Gemfile 
```
bundle
```
## config client


 ## package.json
 "dependencies":
 
"start": "PORT=6501 react-scripts start",
 
## /src/requests.js

```
npm install
```

## switch to solution branch
```
git checkout -b solution
git add .
git commit -m "init solution"
git push --set-upstream origin solution -f
```
compare
make pull, submit
https://github.com/harryji168/quiz_auction/pull/1
 

https://docs.google.com/forms/d/1L6iHrX3IyjmaEYE7X0DVwJ5kCihqDXbY1_-XmUkzQ0g/viewform?edit_requested=true

 
```
rails g model auction title:string  description:string ends_at:date reserve_price:integer
rails g model bid price:integer auction:references
rails g model user first_name:string last_name:string email:string password_digest:string  
rails g migration add_user_references_to_auctions user:references
rails g migration add_user_references_to_bids user:references
 ```

# update model
apps/models/auction.rb
apps/models/bid.rb
apps/models/user.rb
```
rails db:create
rails db:migrate
```


## create seeds
seeds
```
rails db:seed
```

# api::V1::SessionsController

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
      origins 'http://127.0.0.1:6501', 'localhost:6501'#whitelist domains
      resource(
          '/api/*',  #limit requests to paths that look like /api
          headers: :any,  #allow the request to contain any headers
          credentials: true, #allow to send and save cookies between domains with CORS
          methods: [:get, :post, :patch, :put, :options, :delete]) #allo these http verbs
    end
  
  
# routes.rb
# app/controllers/application_controller.rb
# app/controllers/api/application_controller.rb
 


rails s

check 
http://[::1]:6001/api/v1/auctions/
http://[::1]:6001/api/v1/auctions/1
http://127.0.0.1:6001/api/v1/current_user

 

# setup react 


## run npm install

## \src 
 app.js
 app.css
index.css
index.js

## \public 

 index.html 
\assets
auctions-logos_white.png
business_cover.mp4
new_auction.mp4

## src/components

```
npm start
```


### Auction status

rails g migration add_status_to_auctions status:string


rails db:migrate