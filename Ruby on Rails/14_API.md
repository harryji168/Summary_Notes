# Rails: Web APIs

Sometimes it is ideal to use your Rails application as an API, this could be
useful in many scenarios such as:

- Backend for a mobile application
- Allow other applications to make HTTP requests to your application programmatically
- Building a single page application (SPA) where most of the front end code is
  generated on the client side

Rails provides you with many tools to handle that.

## Controllers

The key thing to take care of when building a Rails API is to structure your
controller to serve JSON to the client. This can be easily done by having your
actions respond with JSON if the request asks for it:

```ruby
class QuestionsController < ApplicationController
  def index
    @questions = Question.order(created_at: :desc).limit(10)
    respond_to do |format|
      format.html { render }
      format.json { render json: @questions }
    end
  end
end
```
run 
```
rails s
```
in another terminal run 
```
curl -H "Accept: application/json" http://localhost:3000/questions
```

![Screenshot from 2021-10-28 10-09-11](https://user-images.githubusercontent.com/21187699/139302844-476fc55a-cae8-46e5-b8cf-6433542564f0.png)


  > format.html { render } laso let website runing


reference: https://edgeguides.rubyonrails.org/api_app.html


In the example above, we send the `@questions` result back as JSON. Note that
Rails will call an ActiveRecord built-in method `to_json` on each question
record and send them as an array of questions in JSON format where each question
will include all all of its attributes.

## Organizing and Versioning API Controllers

general application 
```
rails g controller api/application --no-assets --no-helper --skip-template-engine
```

It's recommended that you organize your API controllers by putting them in a
special directory such as `api`. This way your API controllers can have
different behavior from the web pages' controllers.

It's also recommended that you version your API. This way if, for instance, you
decide to roll out a new phone application, you can still support the old ones
by keeping the older API version up for a period of time.

### The Routes

Let's say we create a directory structure that looks like this:

```
.
└── app
    └── controllers
        └── api
            └── v1
                └── questions_controller.rb
```

Then you can write your routes as such:

```ruby
namespace :api, defaults: {format: :json} do
  namespace :v1 do
    resources :questions
  end
end
```

The `namespace` method in Rails routes makes it so it will automatically look
in a directory `api`, then in a sub-directory `v1` for `QuestionsController`. The url
for the index will be: `/api/v1/questions`.

It will also expect that the nested controller will have a parent module for
each parent namespace. The questions controller for the routes above would be
named `Api::V1::QuestionsController`.  Here `Api` is a module, `V1` is a
sub-module of `Api` and `QuestionsController` is a class of the `V1` module.

Note that we added the options `defaults: {format: :json}` this means you
can skip the `.json` at the end of the URL to make the format `JSON`. This is
because Rails' default  format is `HTML`.

### Building the Controller

You can generate a controller by running the following command:

```
rails g controller api/v1/questions --no-assets --no-helper --skip-template-engine
```

![Screenshot from 2021-10-28 10-17-44](https://user-images.githubusercontent.com/21187699/139303981-ba4274fd-8da4-4f6b-a9fe-b7d12d4daf02.png)


If you structured your routes as in the section above, the generated controller
will work and it will look like:

```ruby
class Api::V1::Questions < ApplicationController

end
```

If you roll out a new API version `v2`, you can inherit all the
functionality from the `V1` controller:

```ruby
class Api::V1::Questions < Api::V2::Questions

end
```

This automatically inherits all the functionality from one version to another
and if something changes then you can simply override an action or add an
action.

# add
gem 'active_model_serializers'

```
rails g serializer question_collection
```bundle

### Rendering JSON

As we saw earlier, we're able to render JSON by writing a code in the
controller action that looks like:

```ruby
render json: @questions
```

Rails will automatically render all the attributes for the object as JSON.  If
the object happens to be a collection, it will be sent as a JSON array.  This
approach is not the best as it won't be possible to customize the JSON.

There are better approaches to rendering JSON. Two are presented below:

- JBuilder
- ActiveModel Serializer

#### JBuilder

`JBuilder` is a DSL (Domain Specific Language) for creating JSON. You can think
of it as a templating language like ERB for JSON.

Rails includes it in the `Gemfile` by default. You may see a line that looks like:

```ruby
gem 'jbuilder', '~> 2.0'
```

There is no need to include an extra gem for it. Rails can render a JBuilder
file as if it were an ERB template:

```ruby
class Api::V1::QuestionsController < ApplicationController
  def index
    @questions = Question.order("created_at DESC").limit(10)
  end
end
```

The above `index` would expect template jbuilder file at the following path:

```
/app/views/api/v1/questions/index.html.jbuilder
```

Its contents could be:

```jbuilder
json.array! @questions do |question|
  json.id question.id
  json.title question.title.capitalize
  json.url question_url(question)
  json.answers question.answers do |answer|
    json.id answer.id
    json.body answer.body
  end
end
```

The code above will generate JSON containing an array of questions where each
question will have:

- an id,
- a capitalized title,
- a url and
- a key `answers` that references an array of answers, each answer will have:
  - an id and
  - a body.

You can read more about customizing your `JSON` with `JBuilder` at
[jbuilder](https://github.com/rails/jbuilder).

#### Using ActiveModel Serializers

Another approach to customize the JSON response to use ActiveModel
Serializers which is a gem that needs to be added. We start by adding the gem to
the `Gemfile`:

```ruby
gem 'active_model_serializers'
```

Then we run `bundle`. After that we can generate a serializer class by running:

```ruby
rails g serializer question
```

Which will generate a class `/app/serializers/question_serializer.rb` that looks
like:

```ruby
class QuestionSerializer < ActiveModel::Serializer

end
```


https://github.com/rails-api/active_model_serializers/blob/v0.10.6/docs/general/serializers.md

We can customize the class by specifying the attributes we want to generate in
the JSON and declaring any associations we want to include with the JSON as well
so the class may look like:

```ruby
class QuestionSerializer < ActiveModel::Serializer
  attributes :id, :title, :description

  has_many :answers

  def title
    title.capitalize
  end
end
```

By defining a serializer class like the above, Rails will use this class instead
of the standard `to_json` method that is built-in with ActiveRecord. So our
controller can look like:

```ruby
class QuestionsController < ApplicationController
  def index
    @questions = Question.order("created_at DESC").limtit(10)
    render json: @questions
  end
end
```

And there is no need for a template file as in JBuilder. All the JSON will
generated from the Serializer class.

## Api::ApplicationController

It's best to create a parent controller that all api controllers can inherit
behaviour from, because they will inevatibly share logic and override behaviors
from `ApplicationController`.

Generate it with:

```
rails g controller Api::Application --no-assets --no-helper --skip-template-engine
```

This will create a ruby file at `./app/controllers/api/application_controller.rb`
that contains:

```ruby
class Api::ApplicationController < ApplicationController
end
```

Inside `Api::V1::QuestionsController` replace its parent controller:

```ruby
class Api::V1::QuestionsController < Api::ApplicationController
  # code here
end
```

Do this for all future api controllers.

### Disabling CSRF Token Verification

Rails expects that any POST request made to any of its controllers will include
a CSRF token. This is used to prevent Cross-site request forgery attacks. Read
more about it [here](https://en.wikipedia.org/wiki/Cross-site_request_forgery).

This security measure is not necessary for API controllers where it's
expected that clients from other domains will be able to access our application's
API.

Add the following:

```ruby
class Api::ApplicationController < ApplicationController
  skip_before_action :verify_authenticity_token
  # code
end
```
```
rails g controller api/v1/sessions --no-assets --no-helper --skip-template-engine
```

## Api Key

Web APIs can't use a session to hold authentication state. A different approach
needs to be used and this is where api tokens will come in. Api Keys are
strings of assorted characters that will be generated for a user to uniquely
identify that user in a request.

Clients of our web api will include the token in their request's http headers.
The `Api::ApplicationController` will detect this and find the owner of the
token and set them as the `current_user`.

### Generating The Key

The key will be generated whenever a user is created. You'll do this in the user
model.

First, you need to add a column to the user's table:

```bash
rails g migration add_api_key_to_users api_key
```

Go to the migration file and add an index on `api_key`.

```ruby
class AddApiKeyToUsers < ActiveRecord::Migration[5.1]
  def change
    add_column :users, :api_key, :string
    add_index :users, :api_key
  end
end
```

Run your migrations.

Then, go to the user model and create a method to generate the `api_key`. Using
the lifecycle callback, `before_create`, we'll make sure that the `api_key` is
generated whenever a user is created.

```ruby
class User < ApplicationRecord
  # Some code...

  before_create :generate_api_key

  # More code...

  private
  def generate_api_key
    loop do
      self.api_key = SecureRandom.hex(32)
      break unless User.exists?(api_key: api_key)
    end
  end
end
```

## Authentication

For the web api controllers, the `api_key` will be used to authenticate
users instead of setting a `user_id` in the session. This will be done in the
`Api::ApplicationController`.

A private method, `api_key`, will be used to get the api key from the HTTP
request's headers. Namely, it's going to look for a header named
`Authorization`.

`ApplicationController`'s `current_user` method will be replaced with a version
that finds the user by their `api_key`.

Finally, `authenticate_user!` will also be replaced with a version that is more
usefull for api controllers.

```ruby
class Api::ApplicationController < ApplicationController
  skip_before_action :verify_authenticity_token

  def is_user_signed?
  end
  helper_method :is_user_signed?

  def current_user
    @_user ||= User.find_by(api_key: api_key) unless api_key.nil?
  end
  helper_method :current_user

  private
  def api_key
    if requests.headers['AUTHORIZATION']
      request.headers['AUTHORIZATION']
    end
  end

  def authenticate_user!
    head :unauthorized unless current_user.present?
  end
end
```

To tie it together, add a before action, `before_action :authenticate_user!` to
any api controller that inherits from `Api::ApplicationController` to restrict
access.

add chrome extension ->json viewer

view json from
```
http://localhost:3000/api/v1/questions
```

https://http.cat/