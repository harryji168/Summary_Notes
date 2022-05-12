# Seed_for_testing

## install faker and cowsay

check Gemfile, if no the following line, add it

```ruby
gem 'cowsay', '~> 0.3.0'
gem 'faker'
```
and run 

```shell
bundle
```


## use faker in seed file

```ruby
# db/seeds.rb

# destroy all first
Answer.destroy_all
Question.destroy_all

#run using 
20.times do
    created_at = Faker::Date.backward(days:365 * 5)

    q = Question.create(
       title: Faker::Hacker.say_something_smart,
       body: Faker::ChuckNorris.fact,
       view_count: rand(100_000),
       created_at: created_at,
       updated_at: created_at
    )
    if q.valid?
        rand(1..5).times do
            Answer.create(body:Faker::Hacker.say_something_smart, question:q)
        end
    end
end

questions = Question.all
answers = Answer.all

# use cowsay report input count of data
puts Cowsay.say("Generated #{questions.count} questions", :frogs)
puts Cowsay.say("Generated #{answers.count} answers", :cow)
```

run rails seed in terminal
```ruby
rails db:seed
```
result like this:
![Screenshot from 2021-10-10 15-04-46](https://user-images.githubusercontent.com/21187699/136714361-1391fe17-1290-46c7-b21f-ba88156a0e47.png)

