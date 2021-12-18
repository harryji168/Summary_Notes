# setup workspace
# rails set up database
/config/database.yml  db
```
db:reset
```
/config/puma.rb  port
 

# config/initializers/cors.rb

 origins 'http://127.0.0.1:5505', 'localhost:5505'#whitelist domains


# react

# requests.js

const BASE_URL = 'http://localhost:5005/api/v1';

# package.json 

"start": "PORT=5506 react-scripts start",



###
# create folder

# create rails project
```
rails new biddr_api
```

# create react project
 ```
 create-react-app biddr_client
 ```
# create workspace

# init git

cd biddr_api
delete.sh
cd biddr_client
delete.sh
cd ..
create.sh https://github.com/harryji168/auction.git


## config api
/config/database.yml 
 database: biddr_api_8_development
/config/puma.rb 
 port ENV.fetch("PORT") { 5008 }
/config/initializers/cors.rb
    allow do
      origins 'http://127.0.0.1:5508', 'localhost:5508'#whitelist domains
      resource(
          '/api/*',  #limit requests to paths that look like /api
          headers: :any,  #allow the request to contain any headers
          credentials: true, #allow to send and save cookies between domains with CORS
          methods: [:get, :post, :patch, :put, :options, :delete]) #allo these http verbs
    end
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
rails g controller api::v1::questions --no-assets --no-helper
```

gem install rack-cors

https://www.stackhawk.com/blog/rails-cors-guide/
 
```
rails g model auction title:string  description:string ends_at:date reserve_price:integer
```
 
```
rails g model bid price:integer auction:references
```
rails g model user first_name:string last_name:string email:string password_digest:string  

rails g migration add_user_references_to_auctions user:references
rails g migration add_user_references_to_bids user:references

```
rails db:migrate
```
# update model

seeds
```
rails db:seed
```

api::V1::SessionsController


////react
 

 # react 

 app.js

 package.json