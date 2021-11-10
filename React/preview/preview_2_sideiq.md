# Background Jobs with Sidekiq - Summary notes
In most web application you will need to have some tasks performed in the background to avoid consuming resources of the web server. 

Sidekiq is a really good option if you want a fast background processor. The downside to using Sidekiq is that it depends on Redis database which means you have to set up and maintain another component in your system.

## Setting Up
If you don't have Redis database then you will make sure to have it installed. On Mac computers you can use brew:
```
brew install redis
```
Then you can run the Redis server by typing:
```
redis-server
```
Redis will run on port `6379`.

### A bit more on Redis
Although you don't need to directly know about Redis, it's good to be familiar of what it does. Redis is a fast key/value database that stores data in memory initially and eventually persists them to the disk. You can test simple interaction with Redis by installing the redis gem:
```
gem install redis
```
Then run the following in `irb`:
```ruby
require "redis"
require "json"
redis = Redis.new
redis.set "hello", [1,2,3].to_json
redis.get "hello"
```
In the above we simple connected to the Redis database then we set a key/value pair and retrive it.

## Setting Up Sidekiq
We start by adding `sidekiq` to the `Gemfile`:
```ruby
gem 'sidekiq'
```
After that we run `bundle`. Then we add the following line to the `config/application.rb` file:
```ruby
 config.active_job.queue_adapter = :sidekiq
 ```
 
 ## Generating an ActiveJob worker
 After setting up Sidekiq you can generate a worker in Rails to perform a specific task so you can run:
 ```
 rails g job determine_funding_state
 ```
 This will create a file `determine_funding_state.rb` in your `/app/workers` folder. If you want to test things from the Rails console, you may want to add the following line to you `/config/application.rb`:
 ```ruby
 config.autoload_paths << Rails.root.join("app", "workers")
 ```
 You worker will look like:
 ```ruby
 class DetermineFundingStateJob < ActiveJob::Base
  queue_as :default

  def perform(*args)
  end
end
 ```
 You can put the code you want in the `perform` method as in:
 ```ruby
def perform(*args)
  campaign      = args[0]
  pledges_total = campaign.pledges.sum(:amount)
  if pledges_total >= campaign.goal
    campaign.fund!
  else
    campaign.unfund!
  end
end
 ```
 
 ## Running the Worker
 To run the worker you can add the following line in your Rails application such as controllers:
 ```ruby
 DetermineFundingStateJob.perform_later(campaign)
 ```
 Or if you'd like for this job to run at a later date, you can do:
 ```ruby
 DetermineFundingStateJob.set(wait_until: campaign.end_date).perform_later(campaign)
 ```
 
 ## Running Sidekiq Worker
 You can run Sidekiq worker by simply executing the following command:
 ```
 sidekiq
 ```
 in the root of you Rails project. Make sure that redis is running as Sidekiq will store and retrieve data from Redis. By default Sidekiq will run the `default` queue. If you want to have Sidekiq run jobs from other queues such as `mailers` you can run:
 ```
 sidekiq -q mailers
 ```
 
 ## Viewing Sidekiq Jobs Status
 You can view the Sidekiq jobs status by using the Sidekiq web. First you will need to have Sinatra installed. Make sure you have the following in your `Gemfile`:
 ```ruby
 gem "sinatra"
 ```
 After running `bundle` add the following to your `/config/routes.rb`:
 ```ruby
require 'sidekiq/web'
# ...
mount Sidekiq::Web, at: '/sidekiq'
 ```
 Then you can access the Sidekiq page by visiting `/sidekiq` in the browser. For instance, you may visit `http://localhost:3000/sidekiq`.