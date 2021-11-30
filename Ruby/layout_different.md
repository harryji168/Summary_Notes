
You can specify the layout controller wide or for a specific action.

The layout file needs to be in the layouts folder.

To specify the layout file controller wide you can do this

class BlogController < ActionController::Base
  layout "unique_blog_layout"

  def index
  end

  ...

end


set it for a single view

class BlogController < ActionController::Base

  def index
    render layout: "unique_blog_layout"
  end

  ...
end


https://stackoverflow.com/questions/45131041/different-application-layout-for-my-rails-application