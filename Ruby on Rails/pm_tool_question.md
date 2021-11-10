PM_Tool

# how to models: Project: title (required & unique)
# how to models:Task: title (required & unique within a project) and due_date

### https://boringrails.com/tips/rails-unique-scope

class Project < ApplicationRecord
  belongs_to :account

  has_many :tasks

  validates :name, presence: true, uniqueness: { scope: :account_id }
end


## shared erb

_show_projects.html.erb
<%= render "shared/show_projects"%>