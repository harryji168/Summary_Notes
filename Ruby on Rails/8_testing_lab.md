[Lab] Circle Class
Write a Circle class following TDD principles. Initialize the circle with a radius attribute. It should have the following 3 methods:

- diameter method that returns the diameter.
- area method that returns the area of the circle. Test with various circles that the area returned is correct.
- perimeter method that returns the length of circle's border (or perimeter). Test with various circles that the perimeter returned is correct.


# TDD & MiniTest

## Test Driven Development Process

1. Write a test
2. Run all tests and see if any fails
3. Write code to make a test pass
4. Re-run tests
5. If tests pass, refactor code
6. Go to 1.

Often referred to as Red-Green-Refactor. When a test fails, it shows red. When you make a test pass, it shows green. Then, you refactor.

## Given-When-Then

Given-When-Then is a methodology of writing tests. Its approach is to divide writng a test into 3 steps:

- **Given** represents the state of the program before the test begins.
- **When** is the behaviour that we're specifying.
- **Then** represents the state of the program after the test ends.


## Testing with Minitest

You can use MiniTest to write simple tests in Ruby. It can be used with Rails as well.

## Setting Up
To set up MiniTest, simply install the gem:
```shell 
gem install minitest
```
gem minitest  will install global, and don't need include `Gemfile`
it already in gemfile.lock


![Screenshot from 2021-10-14 14-33-14](https://user-images.githubusercontent.com/21187699/137398728-618fb5a0-7be3-4a8c-bde1-918b3ff3c64e.png)

gemfile is for peoplre edit
gemfile.lock is generate for machine

same with  
package.json
package.lock 

just package form nom, gem file for ruby

![Screenshot from 2021-10-14 09-49-13](https://user-images.githubusercontent.com/21187699/137361731-0e9dcbb9-f7a3-432f-a95e-b6d098237deb.png)

```
mkdir minitest
cd minitest
```


## create class file  `circle.rb`
 
 


### make file  `AwesomeTest.rb`
``` ruby 
equire "minitest/autorun"


# To create a grouping of tests with MiniTest,
# create a class whose name ends in `Test` and inherits from MiniTest::Test
class AwesomeTest < MiniTest::Test

    def test_something
        
    end
    

end

```

```run test
ruby AwesomeTest.rb
```
![Screenshot from 2021-10-14 10-01-57](https://user-images.githubusercontent.com/21187699/137363444-cbac237a-d7e7-49fa-92a7-a406b1a26856.png)

change 
```
 assert_equal(3, 1+1)
``` 
it should error message 

![Screenshot from 2021-10-14 10-04-39](https://user-images.githubusercontent.com/21187699/137363828-23461bf1-0373-4b7b-bf7e-3d75a46d3a96.png)


### make another file Vector.rb
```ruby 
class Vector
    attr_accessor(:x, :y)
    def initialize(x, y)
        @x = x 
        @y = y
    end
     
    def length
        Math.sqrt(@x ** 2 + @y ** 2)
    end
end
```

### make test this class  VectorTest.rb

```ruby
require "minitest/autorun"
require "./Vector.rb"

class VectorTest < MiniTest::Test
    def test_length
        # GIVEN - the initial state of our program
        # a vector of (3, 4)
        vector = Vector.new(3 ,4)

        # WHEN - an action is triggered
        # Then length method is called
        length_of_vector = vector.length

        # THEN - we verify the final state
        # The length should equal 5
        assert_equal(5, length_of_vector)
        
        # When using assert_equal, the argument order is as follows
        # 1 the value we expect or want
        # 2 the actual value our code returned

    end
    
end
```

run test

```
ruby VectorTest.rb
```
![Screenshot from 2021-10-14 10-23-17](https://user-images.githubusercontent.com/21187699/137366327-8d04204d-dafd-4db6-97d3-738c65e25455.png)


## modify Vector.rb add 
```
def to_s
        "Vector (#{@x}, #{@y})"
end
```
### modify VectorTest.rb add 

```
def test_to_s
        # GIVEN 
        vector = Vector.new(1, 1)
        # WHEN
        to_s = vector.to_s
        # THEN
        assert_equal("Vector (1, 1)", to_s)        
    end
```    

```
ruby VectorTest.rb
``` 
![Screenshot from 2021-10-14 10-34-51](https://user-images.githubusercontent.com/21187699/137367857-205d154b-914b-465a-8a43-a6accd555ff4.png)



Break

##  add another new file rectangle_test.rb
rectangle_test.rb
```
require "minitest/autorun"
require "./rectangle.rb"

class RectangleTest < MiniTest::Test
    
    def test_area
        # GIVEN
        rectangle = Rectangle.new(2, 10)
        # WHEN
        area = rectangle.area
        # THEN
        assert_equal(20, area)
    end
    

end
```


## add rectangle.rb

```
class Rectangle
    def initialize(length, width)
        @length = length
        @width = width
    end

    def area
        @length * @width
    end
    
end
```

# RSpec with Rails Summary Notes
## Setting up RSpec Rails
to set up RSpec with Rails
### Add the gem to your `Gemfile`:
```ruby
group :development, :test do
  gem 'rspec-rails'
  ...
end
```   

```sh
bundle
```


```sh
rails g rspec:install
```
This will generate the following files:
- .rspec
- spec/spec_helper.rb
- spec/rails_helper.rb

You can find out more information on this Github page:  [https://github.com/rspec/rspec-rails](https://github.com/rspec/rspec-rails)

![Screenshot from 2021-10-14 11-09-38](https://user-images.githubusercontent.com/21187699/137372614-c0b563b5-adfb-466d-b431-97b927eafac0.png)


To run all of your specs, run this command in your console:
```shell
rspec
```



```sh
rails g rspec:model JobPost
```

![Screenshot from 2021-10-14 11-13-22](https://user-images.githubusercontent.com/21187699/137373053-71b61218-f96e-41b3-bdad-976e791090bc.png)


generate file   `job_post_spec.rb`

![Screenshot from 2021-10-14 11-14-10](https://user-images.githubusercontent.com/21187699/137373152-4ec8cc66-945d-4ad0-a0f8-463da337a671.png)




To run all of your specs, run this command in your console:
```shell
rspec
```

```run debug
rspec -f d
```


```sh
rails g model job_post title description min_salary:integer max_salary:integer company_name location
```


![Screenshot from 2021-10-14 11-53-44](https://user-images.githubusercontent.com/21187699/137378617-3774eed9-0417-4098-8909-0253de16c7cc.png)

have conflict

just ignore  N

check `20211014185309_create_job_posts.rb`
```
class CreateJobPosts < ActiveRecord::Migration[6.1]
  def change
    create_table :job_posts do |t|
      t.string :title
      t.string :description
      t.integer :min_salary
      t.integer :max_salary
      t.string :company_name
      t.string :location

      t.timestamps
    end
  end
end
```

run migrate
```sh 
rails db:migrate
```

```
rspec -f d
```

## if no error, no fails when 

just go top
```
cd ..
```
then have error
![Screenshot from 2021-10-14 12-00-02](https://user-images.githubusercontent.com/21187699/137379430-06e4f84b-f53d-4cd1-a3c9-f17cd3f110f4.png)

fixed sentense then failure

![Screenshot from 2021-10-14 12-03-20](https://user-images.githubusercontent.com/21187699/137379843-03c0f315-4bd3-444d-81d4-ff4a5ace7afb.png)




# factory 

```
gem 'factory_bot_rails'
```


```
bundle
```


```
rails g factory_bot:model job_post
```

# under `spec\factories\job_posts.rb`
```
FactoryBot.define do
  factory :job_post do
    title { Faker::Job.title }
    description { Faker::Job.field }
    min_salary { rand(10_000..20_000) }
  end
end
```

# change `models\job_post_spec.rb`

```ruby
#jp = JobPost.new(description: nil)
jp = FactoryBot.build(:job_post, description: nil)
```

 

## Writing basic model tests
### Setting up
After you setup `rspec-rails` as per instructions above, Rails will automatically generate a `spec` file when you generate the model. For instance, if you run the following in the console:
```shell
rails g model user email password_digest
```
Rails will generate the file `spec/models/user_spec.rb` in addition to the files that get generated normally.

If you'd like to generate a spec file for a model that was generated already, you can run this in the console:
```
rails g rspec:model user
```
which will generate the `spec/models/user_spec.rb` file.

### Setting up groups with describe and context
Your `user_spec.rb` file should look like this now:
```ruby
RSpec.describe User, type: :model do
  ..
end
```
It's recommended that you group your tests within `describe` or `context` blocks, for instance:
```ruby
describe ".full_name" do
  # test examples go here
end
```
or
```ruby
context ".full_name" do
  # test examples go here
end
```
The `describe` and `context` methods have the same effect. You have both as it reads better to use one over the other at times.

### Writing The Test
To write a test in `RSpec` you can use the `it` or `specify` keywords. Make sure to give them a good text description:
```ruby
it "returns the first name and last name concatenated" do
  # test body goes here
end
```
### Testing the outcome
Use `expect` method to test the outcome of the test, for instance:
```ruby
it "returns the first name and last name concatenated" do
  u = User.new({first_name: "John", last_name: "Smith"})
  expect(u.full_name).to eq("John Smith")
end
```
The `expect` method takes a value or a block and then can be matched with other values using the `.to`, `.to_not` or `.not_to` methods. It's recommended that you have a single `expect` per test example.
### Useful matchers
Here are some useful `rspec` and `rspec-rails` matchers that come in handy testing models:
#### be_invalid / be_valid
Is used to match the outcome of calling `.valid?` method in Rails. Here is an example:
```ruby
it "requires an email with a proper format" do
  u = User.new({first_name: "John", last_name: "Smith",
                email: "test", password: "supersecret"})
  expect(u).to be_invalid
end
```
#### have_key
Is useful to test if the resulting `Hash` or Hash-like object contains a specific key. Here is an example:
```ruby
it "requires a last name" do
  u = User.new
  u.valid?
  expect(u.errors.messages).to have_key(:last_name)
end
```
#### be
You can check the presence of an attribute or an object using the `be` matcher:
```ruby
it "generates a password_digest upon saving" do
  u = User.new email: "john@smith.com", password: "supersecret"
  u.save
  expect(u.password_digest).to be
end
```





## Writing Your first test
Let's say you have a `Cookie` class in file `cookie.rb`:
```ruby
class Cookie

  def initialize(sugar, flour)
    @sugar, @flour = sugar, flour
  end

  def calorie_count
    @sugar * 5 + @flour * 4
  end

end
```
We Can start by writing the test in a file `cookie_test.rb` that looks like:
```ruby
require "./cookie.rb"
require "minitest/autorun"

class CookieTest < Minitest::Test

end
```
Note in the file above that we require `minitest/autorun` and then we inherit from  `Minitest::Test`. Requiring `minitest/autorun` makes it easy to run our tests.

### Writing the first test
We can then define methods in the above class as:
```ruby
def test_requiring_sugar_and_flour
  assert_raises(ArgumentError) { Cookie.new }
end
```
In the example above we're testing to make sure that when we call `Cookie.new` we get an exception `ArgumentError` because we expect that when we call `.new`, two arguments are passed for the sugar and flour amounts.

Note that for this to work with MiniTest autorun you must start the method name with `test_`.

Also, you must make sure that the test fails at least once. This way if you've already written the code in your `Cookie` class, make sure to comment it out and run your test again to make sure that the test fails under some conditions. Otherwise, you may have written the test in a way that always passes which defeats the purpose of having the test all together.

### Using `assert_equal`
The most common way to write tests is to use `assert_equal` as in:
```ruby
def test_calorie_count_calculation
  c     = Cookie.new(6, 10)
  count = c.calorie_count
  assert_equal(70, count)
end
```
The above code makes sure that the `calorie_count` method returns `70`. There are many more other types of assertions. Find a list of [Minitest assertions here.](http://docs.seattlerb.org/minitest/Minitest/Assertions.html)

## Running Tests
To run tests run the following in your terminal:
```shell
ruby cookie_test.rb
```
This will give you the following output:
```shell
# Running:

..

Finished in 0.001136s, 1761.0641 runs/s, 1761.0641 assertions/s.

2 runs, 2 assertions, 0 failures, 0 errors, 0 skips
```
If tests fail, you will see messages describing that in the outcome.
