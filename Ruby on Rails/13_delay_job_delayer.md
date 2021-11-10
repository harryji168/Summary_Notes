
# create mail 
```
rails g mailer answer_mailer
```

# add gem file
```
gem 'letter_opener'
```
```
bundle
```

# in config/eveironment/development.rb

  #Add letter opener config for mailers
  config.action_mailer.delivery_method = :letter_opener
  config.action_mailer.perform_deliveries = true
  #Above configs were taken from docs: https://github.com/ryanb/letter_opener
  config.action_mailer.default_url_options={
    host: 'localhost:3000'
  }


# create `app\views\answer_mailer\hello_world.html.erb` 

<h1>Hello</h1>


# edit `app\mailers\answer_mailer.rb`
```
   def hello_world
        mail(
            to: 'stephanie@codecore.ca',
            from: 'anyone@example.com',
            cc: 'someone.else@example.com',
            bcc: 'another.person@example.com',
            subject: 'Hello World'
        )
    end
```

# edit `config\initializers\api_keys.rb`
ENV["EMAIL_USERNAME"] = 'another.demo.mail123@gmail.com'
ENV["EMAIL_PASSWORD"] = 'supersecret123!'

# edit  `config\initializers\setup_mail.rb`

ActionMailer::Base.smtp_settings = {
    address: "smtp.gmail.com",
    port: "587",
    enable_starttls_auto: true,
    authentication: :plain,
    user_name: ENV["EMAIL_USERNAME"],
    password: ENV["EMAIL_PASSWORD"]
}

# add ignore email
```
/config/initializers/api_keys.rb
```



# delay job  

```
gem 'delayed_job_active_record'
gem 'delayed_job_web'
```

```
rails g delayed_job:active_record
```

# ActiveJob & Delayed Job with Rails - Summary Notes
In most web application, you are likely to have specific tasks that don't need to be run immediately. If such tasks take a siginificant time of the request cycle then it's a good idea to run it in the background. This means that the request will finish and something will be displayed to the user but the task will be done later. 

Rails has introduced `ActiveJob` that help you define tasks to be run later. `ActiveJob` will need another system to take the tasks defined by it and run them later. One such system is `DelayedJob` which we will cover here. You can find more info about `DelayedJob` here: [https://github.com/collectiveidea/delayed_job](https://github.com/collectiveidea/delayed_job)

## Setting Up DelayedJob
Let's start by adding the `DelayedJob` gem, we will need to add the one specific for `ActiveRecord` as we're using that:
```ruby
# in your Gemfile
gem 'delayed_job_active_record'
```
Then run `bundle`.

Then run:
```bash
$>spring stop
```

This is will stop spring. Spring is a Rails application preloader that speeds up development by keeping your application running in the background. This means you that don’t need to restart a server when you make changes.

`DelayedJob` with `ActiveRecord` stores the jobs' details in a database table. For that we will need to use the generator:
```shell
rails g delayed_job:active_record
```

before running migration, do run :

spring stop 



Then run:
```shell
rails db:migrate
```
After that, we need to configure `ActiveJob` to use `DelayedJob` so we need to add a line to `config/application.rb`:
```ruby
module AwesomeAnswers
  class Application < Rails::Application
    # ...
    config.active_job.queue_adapter = :delayed_job
  end
end
```
Remember to restart your server after those opertaions.

### Running `DelayedJob`
To run jobs that are queued in delayed job you can run the following:
```shell
rails jobs:work
```
This will run a process separate from the Rails server to execute jobs.

## Createing `ActiveJob` Jobs
To create a job you can use the generator:
```shell
rails g job most_liked
```
This will generate a file in `/app/jobs/most_liked_job.rb` file that looks like:
```ruby
class MostLikedJob < ActiveJob::Base
  queue_as :default

  def perform(*args)

  end
end
```
You can write what you want within the `perform` method such as:
```ruby
class MostLikedJob < ActiveJob::Base
  queue_as :default

  def perform(*args)
    @questions = Question.select("questions.id, count(questions.id) AS count").
                         joins(:likes).
                         group("questions.id").
                         order("count DESC").
                         where("questions.created_at >= ? AND questions.created_at <= ?",
                                Time.now.last_month.beginning_of_month,
                                Time.now.last_month.end_of_month).
                         limit(10)
    AdminMailer.send_monthly_report(@questions).deliver_now
  end
end
```
The above will find the 10 most liked questions last month and email them to the admin.

## Invoking `ActiveJob` Jobs
To queue a job you can do:
```ruby
MostLikedJob.perform_later
```
or
```ruby
MostLikedJob.set(wait: 1.month).perform_later
```
If you have set up `DelayedJob` as per instructions above, it will act as the queuing backend and it will handle the job when its turn comes.

If you want to execute it now you can do:
```ruby
MostLikedJob.perform_now
```
Note that if you want to run jobs from Rails console then you want to make sure they're loaded in the Rails console. You can do that by making sure to have all the classes in the `jobs` folder are auto loaded which you can accomplish by adding a line to you `/app/config/application.rb`:
```ruby
# ... 
module AwesomeAnswers
  class Application < Rails::Application
    # ...
    config.autoload_paths  << Rails.root.join("app", "jobs")
  end
end
```

### Mailers
Rails `ActionMailer` can automatically queue an email to be sent by using `deliver_later` so you don't have to create a separate job for that:
```ruby
AnswersMailer.notify_question_owner(@answer).deliver_later
```