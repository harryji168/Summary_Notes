# One to Many Associations in Rails Summary Notes
You're likely to need to build many `one to many` associations in a Rails application in order to make them functional.

## Deciding on the Models
Let's say we have a `Question` model in the database with `title` and `description` fields. And we would like to add an `Answer` model. The association we want here is one to many so one question has many answers. This way when we create an `Answer` record, it's created for a specific question.

## Creating the `Answer` Model
We create the answer model by running the generator:
```shell
rails g model answer body:text question:references
```
The generated migration will contain a piece of code like this:
```ruby
# /db/migrate/20211008165654_create_answers.rb
create_table :answers do |t|
  t.text :body
  t.references :question, foreign_key: true

  t.timestamps null: false
end
```
run migrate
```sh
rails db:migrate
``` 

## Setting Up ActiveRecord Associations
From the command we ran above we get an `Answer` model that looks like:
```ruby
# /db/models/answers.rb
class Answer < ActiveRecord::Base
  belongs_to :question
  validates :body, presence: true, length: { minimum: 2, maximum: 200 }
end
```
Rails generator automatically adds a `belongs_to` statement in the model. This will help us later work with associated records. Now we need to set up the association from the `Question` model:

```ruby
# /db/models/qestions.rb
class Question < ActiveRecord::Base
  has_many :answers, dependent: :destroy
end
```

Setting up the association above with `has_many` enables us to easily work with associations as we will see in the next section.

The `dependent` option is very important for data consistency. The most popular options are `:destroy` and `:nullify`. If you have answers associated with a question and you delete the questions this is what will happen:
- If you have set the `dependent` option to `:destroy` it will delete all the answers whose `question_id` is the id of the question you just deleted (answers associated with that question).
- If you have set the `dependent` option to `:nullify` it will keep all the answers  whose `question_id` is the id of the question you just deleted (answers associated with that question) but it will update their `question_id` to become `NULL`.

## Working with Associations
Once you've set up the associations you can now easily create associated records, here are a few ways:

enter 
```ruby
rails c
```

```ruby
q = Question.find 10
a = Answer.new(body: 'My Awesome Answer')
a.question = q
a.save
```
In the code above the answer `a` will have a `question_id` of `10`.

You can also do:
```ruby
q = Question.find 10
a = q.answers.new(body: 'My Awesome Answer')
a.save
```
or
```ruby
q = Question.find 10
a = q.answers.create(body: 'My Awesome Answer')
```
You can also do:
```ruby
q = Question.find 10
a = Answer.create(body: 'My Awesome Answer', question: q)
```
If you want to query for answers you can do:
```ruby
q = Question.find 10
q.answers
```
`q.answers` will fetch all the questions whose `question_id` is `10`.

## Associations in Rails Controllers
Now that we've set up associations with the models we will need to create or modify our controller to support creating associated records. The convention in Rails is to use RESTful routes that includes the child record's parameters and the parent record's id. We will be using this convention with our controller.


### Setting Up the Routes
We start by setting up the routes to enable having the id of the question handy when creating an answer:
```ruby
# modify config/routes.rb
resources :questions do
  resources :answers, only: [:create, :destroy]
end
```
The above will generate the following two routes for answers:
```
question_answers POST       /questions/:question_id/answers(.:format)          answers#create
question_answer  DELETE     /questions/:question_id/answers/:id(.:format)      answers#destroy
```

We note that now the `answers` routes have `:question_id` as part of the url. This way if we're creating an answer, we can simply get that id to find the question and associate it with the answer we're about to create.

### Setting Up the Form
In the question's show page which is `/app/views/questions/show.html.erb` we we build the form that we need to create the answer, we start by instantiating an instance variable in the question's `show` action:
```ruby
# modify  `app/controllers/questions_controller.rb` add the following line
def show
  @question = Question.find params[:id]
  @answer   = Answer.new
end
```

Then we can use that instance variable to generate the form with:

```erb
# modify  `views/questions/show.html.erb`  add the following line

<ul>
<% @answers.each do |answer| %>
    <li>
        <%= answer.body%>
        <small>
            Answered <%= time_ago_in_words(answer.created_at) %> ago
        </small>
        <%= link_to "Delete", question_answer_path(@question.id, answer.id), method: :delete, data:{confirm: "Are you sure"}  %>
    </li>
<% end %>
</ul>
```
 
### Setting Up the Answers Controller
Now we need to capture the answer's params and save the answer. We start by generating the controller:
```shell
rails g controller answers
```
Then we set up the `create` action:

```ruby
# `app/controllers/answers_controller.rb`
class AnswersController < ApplicationController
  def create
    @question = Question.find params[:question_id]
    answer_params = params.require(:answer).permit(:body)
    @answer   = Answer.new answer_params
    @answer.question = @question
    if @answer.save
         redirect_to question_path(@question), notice: 'Answer created!'
    else  
        # Handling errors we want to stay on this page
        @answers = @question.answers.order(created_at: :desc)
        # '/questions/show' is not the action 
        # it's the page /questions/show.html.erb
        render '/questions/show'
    end  
  end
end
```
The above code will create an answer record associated with the question whose page we were on. It will then redirect back to the question's show page.

 
We also need to modify the form to display errors:

```erb
<%# modify  `/app/views/questions/show.html.erb` add  %>
<% if @answer.errors.any? %>
    <ul>
    <% @answer.errors.full_messages.each do |msg| %>
        <li> <%= msg%> </li>
    <% end%>
    </ul>
<% end%>

```

### Listing Answers
Let's start by listing answers in the question show page:
```erb
<%# modify  `/app/views/questions/show.html.erb` add  %>
<%= form_with(model:[@question, @answer]) do |f|%>
    <div>
        <%= f.label :body%>
        <br>
        <%= f.text_area :body, cols: 50, rows: 5 %>
    </div>
    <%= f.submit "Answer"%>
<% end %>
 
```

### Deleting Answers
To delete answers, we first need to add a link to delete the answer, we can do so using `link_to`:
```erb
<%# modify  `/app/views/questions/show.html.erb` add  %>

<ul>
<% @answers.each do |answer| %>
    <li>
        <%= answer.body%>
        <small>
            Answered <%= time_ago_in_words(answer.created_at) %> ago
        </small>
        <%# link_to "Delete", question_answer_path(@question, answer), method: :delete, data:{confirm: "Are you sure"}  %>

        <%= link_to "Delete", question_answer_path(@question.id, answer.id), method: :delete, data:{confirm: "Are you sure"}  %>
    </li>
<% end %>
</ul>

```
Then in your controller you can write:

```ruby
# `app/controllers/answers_controller.rb`
def destroy
  @question = Question.find params[:question_id]
  @answer = Answer.find params[:id]
  @answer.destroy
  redirect_to question_path(@question), notice: 'Question Deleted'
end
```
