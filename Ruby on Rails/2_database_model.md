# Active Record Summary Notes

## Generating a model   app/models

to generate a model with Ruby on Rails run:

We will work with a `Question` model. Let's start by creating the model:
```shell
rails g model question title:string body:text
```


This generates a model called `question.rb` in the `app/models` folder and generates a migration in the `db/migrate` folder that creates the table in the database. To execute the migration run:

```shell
rails db:migrate
```

### db/schema.rb

If you run the command above the second time it will do nothing because the migration has already been executed and the table got created. Rails update `db/schema.rb` file with the latest state of the database. Rails keeps track of migrations using `schema_migrations` table in the database.

## More on migrations
### adding a migration without a model
You can generate a migration without necessarily generating a model by running:
```shell
rails g migration add_view_count_to_questions
```

```ruby
You can add any code to alter your database within the `change` method as in:
```ruby
class AddViewCountToQuestions < ActiveRecord::Migration
  def change
    add_column :questions, :view_count, :integer
  end
end
```
This migration when executed will add a `view_count` column to the `questions` table with an `integer` type.

### Rolling back a migration
If you've made a mistake with your migration and discovered it right away you can revert what the migration did by running:
```shell
rails db:rollback
```
This will revert the last migration you've executed. Be careful here that the action will be the opposite of the action you've done with the `rails db:migrate` and is likely to be destructive. For instance if the action is: `add_column` when you execute the rollback the action will be `remove_column` which will destroy all the data you have in that column.

You can find more information about migrations here: http://edgeguides.rubyonrails.org/active_record_migrations.html


## Active Record Basic Querying

Rails console

```shell
rails c
```
Rails console history

```shell
cat ~/.irb-history
```
We assume in the sections below that we have a `Question` model with fields: `title`, `body` and `view_count`.
### Fetching all the records in the database
To fetch all the record from the database:
```ruby
questions = Question.all
```
This gives you back a `Question::ActiveRecord_Relation < ActiveRecord::Relation` object. The object behaves like an array so you can call methods on it like `.each` but you can also chain it with other methods to do other types of querying.

### Creating a new Question object
To create a new Question object in memory you can do:
```ruby
q = Question.new
```
You can also pass in a `Hash` to the `new` methods as in:
```ruby
q = Question.new({ title: 'To be or not to be', body: 'is that a question?', view_count: 0 })
```
or for short:
```ruby
q = Question.new title: 'To be or not to be', body: 'is that a question?', view_count: 0
```
### Saving a record in the database
To save a record in the database we call the `.save` method on the instantiated object:
```ruby
q = Question.new({ title: 'abc' })
q.save
```

### Creating a Record Right Away
You can create a record right away in the database by using `.create` method as in:
```ruby
Question.create({ title: 'My question title', body: 'My question body', view_count: 0 })
```

## Fetching Records
Active records give you many methods that help in retrieving records from the database. Here are a few:

### `.first`
The `.first` method fetches the first record ordered by the id in an ascending order:
```ruby
Question.first
```
This executes a query like:
```sql
SELECT  "questions".* FROM "questions"  ORDER BY "questions"."id" ASC LIMIT 1
```
### `.last`
The `.last` method fetches the last record ordered by the id in an ascending order, so it technically orders the record in a descending order and fetches the first one:
```ruby
Question.last
```
This executes a query like:
```sql
SELECT  "questions".* FROM "questions"  ORDER BY "questions"."id" DESC LIMIT 1
```

### `.find`
It's very common that you want to find a specific record by its primary key which is likely the `id` in a Rails project. You can do so using the `find` method:
```ruby
Question.find(1)
```

### `.find_by_X`
If you want to find by something other than the id then you can use `find_by_X`:
```ruby
Question.find_by_title('Hello world')
```
This finds the first question with title exactly `Hello world`. Note that ActiveRecrod genertes `find_by_X` for all the columns you have for the record. So if `Question` has `title`, `body` and `view_count`, Rails will make your model work with `find_by_title`, `find_by_body` and `find_by_view_count`. In addition it will generate `find_by` for the standard fields: `id`, `created_at` and `updated_at`. Note that this uses Ruby's meta programming feature to be done. Also, note that `find_by_X` adds a `LIMIT 1` to the query so you'll only get a single record.

### `.where`
If you want to do searching on multiple fields you can use `where`:
```ruby
Question.where({ title: 'Hello World', body: 'This is the body' })
```
This searches the `Question` record by the title and the body. Note that this uses SQL `AND` operator.

### Wildcard Searching
You can perform wildcard searching with ActiveRecord by using `LIKE` within the `where` method:
```ruby
Question.where(['title LIKE ?', '%hello%'])
```
With Postgres you can use `ILIKE` for case-insensitive searching:
```ruby
Question.where(['title ILIKE ?', '%hello%'])
```
Note that in the example above we used a syntax that uses `?` to insert variable components into a SQL query. This is important to avoid having SQL injection if the variable component is actually a user input such as a search term.

### `.limit`
You can limit the number of records fetched using the `.limit` method:
```ruby
Question.limit(10)
```

### `.order`
You can order the fetched records using the `.order` method as in:
```ruby
Question.order(:created_at)
```
The above will generate a query the orders the fetched questions by the `created_at` field. The default is to use ascending order using SQL's `ASC`.

If you would like to order with a descending order you can do:
```ruby
Question.order(created_at: :desc)
```

### Chaining
You can chain the `where`, `limit`, `order`, `offet` and many others to compose more sophisticated queries. For instance:
```ruby
Question.where(['view_count > ?', 10]).where(['title ILIKE ?', 'a']).order(id:  :DESC).limit(10).offset(10)
```
This will generate a single query that looks like:
```sql
SELECT  "questions".* FROM "questions" WHERE (view_count > 10) AND (title ILIKE 'a')  ORDER BY id DESC LIMIT 10 OFFSET 10
```

## Updating Records
Once you've selected one or more records, you have the ability to update them.

### Manually Setting Attributes
ActiveRecord generates attribute accessors for all the table columns so you can use those to set new values for attributes and then call `.save` on that as in:
```ruby
q = Question.find 10
q.title = "Some new title"
q.view_count += 1
q.save
```
### Using `.update_attributes` or `.update`
You can update multiple attributes at once using `.update_attributes` or `.update` which are aliases to the same method. Here is an example:
```ruby
q = Question.find 10
q.update({ title: 'some new _title', body: 'some new body content' })
```

## Deleting Records

### Using `.destroy`
After selecting a record you can delete the record using `.destroy` method as in:
```ruby
q = Question.find 10
q.destroy
```

### Using `.delete`
You can also use `.delete` as well:
```
q = Question.find 10
q.delete
```
Note that using `.delete` skips executing callback methods `after_destroy` and `before_destroy` and also skips deleting or nullifying associated records in the `:dependent` option with associations. Generally, avoid using `.delete` in favor of `.destroy`. There are very few cases when you want to use `.delete`.

## Aggregate Functions
ActiveRecord supports aggregate function calling.

### Using `.count`
You can use the `.count` function by simply calling the `.count` method:
```ruby
Question.count
```
Which executes a SQL like:
```sql
SELECT COUNT(*) FROM "questions"
```

### Using `.group`
You can also execute `GROUP BY` aggregate function using `.group` method. Just make sure to use the right select functions. Here is an example:
```ruby
Question.select('avg(view_count) as count').group('title')
```

## Calling Raw Queries
If you want to practice your SQL skills you can always execute raw SQL queries with ActiveRecord. You can do:
```ruby
connection = ActiveRecord::Base.connection
connection.execute('SELECT * FROM questions WHERE id=1;')
```

## Validations
ActiveRecord gives you the ability to validate data before it gets sent to the database through SQL. This ensures that the data is valid and won't cause the database to throw and exception. Most Rails developers prefer to have most validation happen on the Rails side instead of the database.

### Presence Validation
You can validate the presence of an attribute by adding a presence validation line like this:
```ruby
class Question < ActiveRecord::Base
  validates :title, presence: true
end
```
The code above makes sure that when creating a question a title is present. For instance:
```ruby
q = Question.new
q.save # this returns false
```
The code above will prevent the question from being created in the database. You can access the error messages by calling the `.errors` method:
```ruby
q = Question.new
q.save
q.errors # this is a Hash of arrays that include errors messages: {:title => ["can't be blank"]}
q.errors.full_messages # this will give an array of full messages: ["Title can't be blank"]
```
You can change the default message by passing a message to your validation:
```ruby
validates :title, presence: {message: "must be provided"}
```
Then:
```ruby
q = Question.new
q.save
q.errors.full_messages # ["Title must be provided"]
```

### Uniqueness Validation
You can validate uniqueness as well:
```ruby
validates :title, uniqueness: true
```
Note that the above executes a `SELECT` query to the database first to ensure that there isn't a record with the same title.

### Length Validation
You can validate the length of a string using:
```ruby
validates :title,length: { minimum: 2 , maximum: 200}
```

### Validating the Uniqueness of a Combination of two fields
You can test the validation of two fields by using `scope`. For instance, if you want to validate that the combination of `title` and `body` must be unique then you can do:
```ruby
validates :title, uniqueness: {scope: :body}
```
This means that `title` doesn't have to be unique by itself and `body` doesn't have to be unique by itself by the combination has to be unique.

### Validating Numericality
You can validate that a given field is a number and validate that number using `Numericality` as in:
```ruby
validates :view_count, numericality: {greater_than_or_equal_to: 0}
```
This validation ensures that the `view_count` field is set with a number a not a non-numerical string and it also ensures that the number given is greater than or equal to 0.  less_than_or_equal_to


## Callbacks
Whenever you work with ActiveRecord objects, it's likely to go through a cycle before/after it executes on the database. For instance, if you're creating a record the cycle may look like: Initialize > Validate > Save > Commit. The cycle will be different for different actions. You have access to many callbacks that will be executed before or after a step. Here are two examples.

### `after_initialize`
You can use `after_initialize` to define a method that gets executed after calling `.new` on the ActiveRecord object as in:
```ruby
class Question < ActiveRecord::Base
  after_initialize :set_defaults

  private

  def set_defaults
    self.view_count ||= 0
  end
end
```
It's generally useful to set default values.

### `before_save`
You can use `before_save` to execute an action after it got validation and before it sends the query to the database. For instance:
```ruby
class Question < ActiveRecord::Base
  before_save :capitalize_title

  private

  def capitalize_title
    self.title.capitalize!
  end
end
```

## Scopes
If you have a query or a set of operations that get executed frequently, you can define a class method to help you with that as in:
```ruby
class Question < ActiveRecord::Base
  def self.recent_ten
    order("created_at DESC").limit(10)
  end
end
```
Then you can call:
```ruby
questions = Question.recent_ten
```
You can convert the code above to use a scope as in:
```ruby
class Question < ActiveRecord::Base
  scope :recent_ten, lambda { order("created_at DESC").limit(10) }
end
```

## Seeding the Database
You can seed the database by writing code in the `db/seeds.rb` file as in:
```ruby
100.times do |x|
  Question.create({title: "Question title #{x}", body: "Question body #{x}"})
end
```
Then you can run the seeds file by executing:
```shell
rails db:seed
```
in your console.

### Using Faker
You can use a gem like `Faker` to generate fun random data. Make sure to add `gem 'faker'` to your `Gemfile` then in your `seeds.rb` you can do:

```shell
bundle
```


```ruby
100.times do
  Question.create(title: Faker::Company.catch_phrase, body: Faker::Lorem.paragraph)
end
```
You can find more info on using `Faker` here: [https://github.com/stympy/faker](https://github.com/stympy/faker)

# delete model 

```shell
rails d model question  
```

 