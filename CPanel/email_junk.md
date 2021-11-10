
# Using Junk Mail Controls in Thunderbird to Filter Spam Email

https://ithelp.illinoisstate.edu/knowledge/757-using-junk-mail-controls-in-thunderbird-to-filter-spam-email/


## Validating Uniqueness of Like
If you want to ensure that users only like a single time, you may want to add a validation like this:
```ruby
class Like < ActiveRecord::Base
  belongs_to :user
  belongs_to :question

  # this will ensure that the campaign_id / user_id combo is unique
  # this is needed to ensure that the user can only like a campaign once.
  validates :question_id, 
  uniqueness: {
      scope: :user_id,
      message: "has already been liked"
      }

end