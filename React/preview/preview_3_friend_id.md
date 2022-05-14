# Friendly Id with Rails
URLs are important part of web applictaions as they can describe what certain pages are about. They are also important for search engines to know what the page is about and so rank you for certain keywords, knows as Search Engine Optimizatsion or SEO. This is why it's good to have your urls descriptive so instead of having urls like `http://awesomeanswers.com/questions/1`, it's better to have a url like: `http://awesomeanswers.com/questions/my-awesome-question-title`.

## Overriding the `to_param` Method in ActiveRecord
You can override the `to_param` method which returns just the `id` by default to be something more descriptive. But you will have to make sure that the first part of it is `id` as in:
```ruby
def to_param
  "#{id}-#{title}".parameterize
end
```
The `parameterize` method will make the string URL friendly so for instance it will replace all spaces with dashes `-`. This approach works because Rails will call `to_i` on the parameter it fetches and in Ruby it will convert numbers in string until it reaches a non-numerical character, for example `"123 bla bla".to_i` will be `123`.

There are two problems with the `to_param` appraoch:
1- It has the id in it
2- If the title changes the url will change as well, which may not what you want

## Using FriendlyId
FriendlyId aims to provide us with multiple tools to help solve the problems above. Let's start by adding the FriendlyId gem to our `Gemfile` file:
```ruby
gem 'friendly_id'
```
Then run `bundle`. After that run the following commands:
```
rails generate friendly_id
rails generate scaffold user name:string slug:string:uniq
rails db:migrate
```
The above will create a table for FriendlyId that is useful for storing history of Friendly Ids.

### Adding FriendlyId to Models
We can add FriendlyId to models as follows:
```ruby
class Question < ActiveRecord::Base
  extend FriendlyId
  friendly_id :title, use: [:slugged, :history]
end
```
The above code will require a `slug` column on the `questions` table, if you don't have it you can generate a migration:
```
rails g migration add_slug_to_quesitons slug:string:index
```
The above will generate a migration that will create a `slug` column on the `questions` table and add index to it. Then run `rails db:migrate` to execute the migration.

When generting a slug it won't contain the id of the record at the beginning of it. Also, FriendlyId will make sure that it's unique.

### Using FriendlyId in Controllers
To use FriendlyId in the controller, you will have to make sure that you use `friendly` when finding a record as in:
```ruby
def show
  @question = Question.friendly.find(params[:id])
end
```
If you want to change the `slug` when the user changes the title of the question, you will want to clear slug on the `update` action. Also make sure you have added the `:history` option in the model as we did above to ensure that old urls still work. So the update may look like:
```ruby
def update
  @q = Question.friendly.find(params[:id])
  @q.slug = nil
  if @q.update(question_params)
    redirect_to question_path(@q), notice: "Question updated!"
  else
    render :edit
  end
end
```

### FriendlyId in the Views
You won't have to change anything in the view code you have, generating URLs doesn't change wether you're using `id` or using FriendlyId.