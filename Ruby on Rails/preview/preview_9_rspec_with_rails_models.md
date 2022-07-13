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
then run `bundle` in your console.
After that run the `RSpec` generator command in your console:
```shell
rails generate rspec:install
```
This will generate the following files:
- .rspec
- spec/spec_helper.rb
- spec/rails_helper.rb

You can find out more information on this Github page:  [https://github.com/rspec/rspec-rails](https://github.com/rspec/rspec-rails)

To run all of your specs, run this command in your console:
```shell
rspec
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
