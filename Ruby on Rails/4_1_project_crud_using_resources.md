# use `resoucres` in PM_Tool project  


```shell
rails g controller projects
```

##  config/routes.rb
```ruby
resources :projects 
``` 
 
## app/models/project.rb
```ruby   
class Project < ApplicationRecord
    validates :title, presence: true
end
```


# app/controllers/projects_controller.rb
```ruby

class ProjectsController < ApplicationController

    before_action :find, only: [:edit, :update, :show, :destroy]


    def index
        @projects = Project.all.order(created_at: :desc)    
    end

    # show item detail     
    def show              
    end


    #add New Item 
    def new
        @project = Project.new
    end
    def create       
        @project = Project.new(get_params)
        if @project.save
            flash[:notice] = "Project created successfully!"
            redirect_to project_path(@project.id)
        else
            render :new
        end
    end

    #Edit exist Item
    def edit       
    end
    def update  
        if @project.update(get_params)
            redirect_to project_path(@project.id)    
        else
            render :edit
        end 
    end

    #delete exist item  

    def destroy     
        @project.destroy
        flash[:alert] = "Project deleted successfully!"
        redirect_to projects_path
    end

    private 

    def find
        @project = Project.find params[:id]
    end

    def get_params
        params.require(:project).permit(:title,:description)
    end
end
```
 

### app/views/projects/index.html.erb
```erb
<h1>All Projects</h1>



<% @projects.each do |project|  %>
  <div>
    <h2><%= link_to project.title, project_path(project) %></h2>
    <p><%= project.description %></p>
    <hr>
  </div>
<% end %>


<%= link_to "New Projects", new_project_path %>  
```


### app/views/projects/show.html.erb
```erb
<h1><%= @project.title %></h1>

<p><%= @project.description %></p>

<p><%= time_ago_in_words(@project.created_at) %></p>
<p><%= time_ago_in_words(@project.updated_at) %></p>

<%= link_to("Delete", project_path(@project.id), method: :delete, data: {confirm: "Are you sure?"}) %>
<%= link_to("Edit", edit_project_path(@project.id)) %>


<%= link_to "Back to Projects List", projects_path %>   
```


### app/views/projects/_form.html.erb

```erb
<% if @project.errors.any? %>
    <ul>
        <% @project.errors.full_messages.each do |msg|%>
            <li><%= msg %></li>
        <% end%>
    </ul>
<% end%>
<%= form_with(model: @project) do |form|%>

<div class="form-group">
    <%= form.label :title%>
    <br>
    <%= form.text_field :title ,class:"form-text" , autofocus: true   %>
</div>
<div class="form-group">
    <%= form.label :description%>
    <br>
    <%= form.text_area :description, cols: 50, rows: 5 ,class:"form-text" %>
</div>
<%= form.submit %>
<% end%> 
```
### app/views/projects/new.html.erb
```erb
<h1>New Project</h1>
<%= render "form" %>  
```

### app/views/projects/edit.html.erb
```erb
<h1>Project Edit Page</h1>
<%= render "form" %>   
```

## app/views/layouts/application.html.erb

add 
```
<%= flash[:notice] || flash[:alert] %>
```

![Screenshot from 2021-10-11 18-58-49](https://user-images.githubusercontent.com/21187699/136878204-dda39513-b517-4fbc-bb74-34983ace757d.png)
