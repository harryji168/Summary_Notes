# RSpec with Rails controllers
in gem file
```ruby
gem 'rails-controller-testing'
```
```
bundle
```

generate controller

```
rails g rspec:controller job_posts --controller-specs --no-request-specs
```

TDD  Test-driven development 


```run testing
rspec -f d ./spec/controllers/job_posts_controller_spec.rb 
```

in routes.rb add 
```
urces :job_posts, only: [:new]
``

need a template


add views\job_posts\

```
new.html.erb
```
then pass test

![Screenshot from 2021-10-15 10-05-46](https://user-images.githubusercontent.com/21187699/137527638-28a8879c-09a0-4560-b956-ac7edbd4e4d8.png)


## Setting up
After you setup `rspec-rails` as per instructions above, Rails will automatically generate a `spec` file when you generate a controller. For instance, if you run in the console:
```shell
rails g controller users
```
Rails will generate the file `spec/controllers/users_controller_spec.rb` in addition to the files that get generated normally.

If you'd like to generate a spec file for a controller that was generated already, you can run this in the console:
```
rails g rspec:controller users
```
### Setting up groups with describe and context
The same rules for using `describe` and `context` applies to the controller as per instructions we covered earlier for Rails models. One convention to keep in mind is that when testing a controller action, prepend the action name with a `#` as in:
```ruby
describe '#new' do
  # test examples go here
end
```

#### Difference between describe and context

>According to the rspec source code, "context" is just a alias method of "describe", meaning that there is no functional difference between these two methods. However, there is a contextual difference that’ll help to make your tests more understandable by using both of them.
>
>The purpose of "describe" is to **wrap a set of tests against one functionality** while "context" is to **wrap a set of tests against one functionality under the same state**.

## Writing The Tests
Writing tests for controllers follows the same rules as writing a test for models. The difference is that in controller we usually have to initiate a request and check what the response gives us. Rspec makes it easy to do that.

### Making The request
In controllers, you're likely going to make a request to the controller and test the response or the effects of the request. To make a request in the controller spec you can make use of `get`, `post`, `patch` and `delete` methods that will simulate making such requests to the controller. For instance to make a `get` request to the `new` action, you can write:
```ruby
it 'renders the new template' do
  get :new
  ...
end
```
You can also send in a hash of parameters with the request. For instance, to make a post request with parameters, you can write:
```ruby
it 'sets a flash message' do
  post(:create, params: { { user: { first_name: 'John',
                                    last_name: 'Smith',
                                    email: 'john@smith.com',
                                    password: 'supersecret'
                                  }
                           }
                          })
  ...
end
```
If you want to have something set in the sessions before making the requests, you can make use of the `request` object as in:
```ruby
it 'logs the users out' do
  u = User.create email: 'tam@codecore.ca', password: 'supersecret'
  request.sessions[:user] = u.id
  ...
end
```

### Testing the outcome
In controllers you can test the outcome of a test similar to how we did it in the model, for instance:
```ruby
it 'sets a flash message' do
  post(:create, params: { user: { email: 'john@smith.com',
                                  password: 'supersecret'
                                }
                        })
  expect(flash[:notice]).to be
end
```
You can also make use of the `response` object that `RSpec` gives you to test things like redirection and rending template as in:
```ruby
it 'redirects to the home page' do
  post(:create, params: { user: { email: 'john@smith.com',
                                  password: 'supersecret'
                                }
                        })
  expect(response).to redirect_to(root_path)
end
```
If you want to test instance variables set in the controller you may access them using the `assigns` object. For instance to test a variable called `@user` by checking for `assign(:user)` as you will see in the next section.

### Useful matchers
#### be_a_new
Matches that the object you're testing is a new instance of the class you pass as a first argument of the `be_a_new` method. Here is an example:
```ruby
it 'creates an instance variable with new user object' do
  get :new
  expect(assigns(:user)).to be_a_new(User)
end
```
#### render_template
Use it to check that a certain controller action has rendered a template as part of its response as in:
```ruby
it 'renders the new template' do
  get :new
  expect(response).to render_template(:new)
end
```

#### redirect_to
Use it to check that a certain controller action has redirected to some url as part of its response:
```ruby
it 'redirects to the home page' do
  post(:create, params: { user: { email: 'john@smith.com',
                                  password: 'supersecret'
                                }
                        })  expect(response).to redirect_to(root_path)
end
```

## RSpec improvements techniques
Here are some techniques that help you refactor and improve your `RSpec` tests:
### Using methods
You can use methods to avoid duplicating code especially if that code is likely to change as your app grows later, for instance you can do:
```ruby
def valid_attributes(new_attributes = {})
  { first_name: 'John',
    last_name:  'Smith',
    email:      'john@smith.com',
    password:   'supersecret'
 }.merge(new_attributes)
end

it 'redirects to the home page' do
  post(:create, params: { user: valid_attributes })
  expect(response).to redirect_to(root_path)
end

it 'sets a flash message' do
  post(:create, params: { user: valid_attributes })
  expect(flash[:notice]).to be
end
```
Note that the method is only available within the same block for a given `describe` or `context`. If you want the method to be available for all tests in a given file then you can put it at the top of the block for the first `RSpec.describe`.

### Using `let` and `let!`
As your application grows, the setup for the test is likely to require one or more models to be created before running the test. You can always use `ActiveRecord` methods like `User.create` but that can get tedious very quickly. You can also consider writing methods like:
```ruby
def user
  @user ||= User.create({ email: 'john@smith.com', password: 'supersecret' })
end
```
Or you can use `let`:
```ruby
let(:user) { User.create({ email: 'john@smith.com', password: 'supersecret' }) }
```
which is equivalent to the `user` method above. As you can note from the code the user object will only be created when you call the method the first time. Then it will set an instance variable so the second time you call it it won't create another object.

If you want to force the creation of the object whether you call the method or not then you can use `let!`:
```ruby
let!(:user) { User.create({ email: 'john@smith.com', password: 'supersecret' }) }
```
Similar to defining a regular method in `RSpec`, access to the `let` is restricted to the examples in the block where you defined it.

### Using `before` blocks
If you have a group of tests that require the same setup, you can put the common setup code with in a `before` block as in:
```ruby
context 'With user signed in' do
  before do
    request.session[:user_id] = user.id
  end
  ...
```
This means that any examples defined within this `context` will have its `session[:user_id]` set to `user.id` for its `request` object.


## Using Factories
You are likely to need to create many objects as part of your test setup. You can use a few of the techniques above but you may end up in a situation where you have duplicated code in many spec files to generate the same objects or similar ones.

Factories are a good solution in a situation like this as you define how to create the object once and then use it in any of your test files. One popular gem to use with Rails is `factory_bot_rails`, you can set it by adding this to your `Gemfile`:
```ruby
gem 'factory_bot_rails'
```
After you run `bundle` which installs the gem, Factory Bot will generate a factory file for every model you generate. The factory file will be in `specs/factories`. It will look something like:
```ruby
FactoryBot.define do
  factory :user do
  end
end
```
If you have model that was generated prior to setting up Factory Bot then you can generate a factory by running this command in console:
```shell
rails g factory_bot:model user
```
### Setting up attributes within the factory
The main thing to keep in mind when building a factory is that the factory must always generate a valid record. Factory Bot gives you a set of tools to help generate the record, you can define any attribute but just calling it as if it's a method as in:
```ruby
FactoryBot.define do
  factory :user do
    first_name 'John'
    last_name  'Smith'
    email      'john@smith.com'
    password   'supersecret'
  end
end
```
To generate the model using the factory you can do:
```ruby
user = FactoryBot.create(:user)
```
Make sure to include all the valid attributes for that model. If the attribute has to be unique, then you can make use of FactoryBot's `sequence` which provides a number every time you call the factory so you can use that number to make the attribute unique as in:
```ruby
FactoryBot.define do
  factory :user do
    first_name 'John'
    last_name  'Smith'
    sequence(:email)  {|n| 'john-#{n}@smith.com' }
    password   'supersecret'
  end
end
```
### Automatically generating an associated record
Sometimes you'd like to make sure that there is an associated record created beforehand. You can use `association` feature of FactoryBot. For example, if we have a `Campaign` model that `belongs_to` the `User` model:
```ruby
class Campaign < ActiveRecord::Base
  belongs_to :user
  ...
end
```
Then you can generate a `Campaign` record associated with a created user as in:
```ruby
user = FactoryBot.create(:user)
campaign = FactoryBot.create(:campaign, user: user)
```
But if you want to automatically create a user before creating a campaign, if you don't pass it a user, then you can add as `association` line to the `Campaign` factory as in:
```ruby
FactoryBot.define do
  factory :campaign do
    association :user, factory: :user
    ...
  end
end
```
Then if you can create a record this way:
```ruby
campaign = FactoryBot.create(:campaign)
```
it will create a user record first, then a campaign record associated with that user.