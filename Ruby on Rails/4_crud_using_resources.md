# use `resoucres` to simple code    


```shell
rails g controller questions
```

## using  
```ruby
# in config/routes.rb
resources :questions 
```
## instead of 

```ruby
# in config/routes.rb

# For details on the DSL available within this file, see https://guides.rubyonrails.org/routing.html
  # RESTful routes
get('/questions', {to: 'questions#index'})   #list all items
get('/questions/:id',{to: 'questions#show', as: :question }) # show item detail 

get('/questions/new',{to: 'questions#new'})  #add New Item 
post('/questions',{to: 'questions#create'})  #after post

get('/questions/:id/edit',{to: 'questions#edit', as: :edit_question }) #Edit exist Item
patch('/questions/:id',{to: 'questions#update'}) #Update exist item

delete('/questions/:id',{to: 'questions#destroy'}) #delete exist item  
```


## the other all same

```ruby  
# in app/models/question.rb  same not change
class Question < ActiveRecord::Base
  validates :title, presence: true
  validates :body, presence: true
end
```

```ruby
# in app/controllers/questions_controller.rb == same

  before_action :find_question, only: [:edit, :update, :show, :destroy]

  #list all items
  def index
     @questions = Question.all.order(created_at: :desc)    
  end
  # show item detail     
  def show       
  end

  #add New Item 
  def new
     @question = Question.new
  end
  
  def create           
  @question = Question.new(question_params)
  if @question.save
    flash[:notice] = "Question created successfully!"
    redirect_to question_path(@question.id)
  else
    render :new
  end
  end

  #Edit exist Item
  def edit       
  end
  def update    
    if @question.update(question_params)   
      redirect_to question_path(question)    
    else
      render :edit
    end 
  end

  #delete exist item  

  def destroy  
    @question.destroy
    redirect_to questions_path
  end

  private 

  def find_question
    @question = Question.find params[:id]
  end

  def question_params
    params.require(:question).permit(:title,:body)
  end

```
 

### create file `app/views/questions/index.html.erb`:
```erb
<h1>All Question</h1>

<% @questions.each do |question|  %>
  <div>
    <h2><%= link_to question.title, question_path(question) %></h2>
    <p><%= question.body %></p>
    <hr>
  </div>
<% end %>
```


### create file `app/views/questions/show.html.erb`:
```erb
<h1><%= @question.title %></h1>

<p><%= @question.body %></p>

<p><%= time_ago_in_words(@question.created_at) %></p>
<p><%= time_ago_in_words(@question.updated_at) %></p>

<%= link_to("Delete", question_path(@question.id), method: :delete, data: {confirm: "Are you sure"}) %>
<%= link_to("Edit", edit_question_path(@question.id)) %>
```


### build share form view `app/views/questions/_form.html.erb` for new and edit

```erb
<% if @question.errors.any? %>
    <ul>
        <% @question.errors.full_messages.each do |msg|%>
            <li><%= msg %></li>
        <% end%>
    </ul>
<% end%>
<%= form_with(model: @question) do |form|%>

<div class="form-group">
    <%= form.label :title%>
    <br>
    <%= form.text_field :title ,class:"form-text" , autofocus: true   %>
</div>
<div class="form-group">
    <%= form.label :body%>
    <br>
    <%= form.text_area :body, cols: 50, rows: 5 ,class:"form-text" %>
</div>
<%= form.submit %>
<% end%> 
```
### create file `app/views/questions/new.html.erb`:
```erb
<h1>New Questions</h1>
<%= render "form" %>  
```

### create file `app/views/questions/edit.html.erb`:
```erb
<h1>Question Edit Page</h1>
<%= render "form" %>  
```