# build relational
```sh
rails g model favourite user:references product:references 
```
```sh
rails g model like user:references review:references 
```

in 20211019210711_create_favouries.rb  
add
```
 t.boolean :is_favourite
```
20211019210711_create_favouries.rb
no change




```sh
rails db:migrate
```

check schema.rb

 ![Screenshot from 2021-10-19 14-14-16](https://user-images.githubusercontent.com/21187699/137991603-c7d99a1e-0d08-4f35-871b-6e1f0d612296.png)

 ![Screenshot from 2021-10-19 14-15-12](https://user-images.githubusercontent.com/21187699/137991720-5d8c464c-a651-498e-a5be-d42dc1395e1e.png)



# update models

add valation 

`app/models/favourite.rb`
```ruby
validates :product_id, uniqueness: { scope: :user_id, message: "has already been favourited "}
```

`app/models/like.rb`
```ruby 
validates :review_id, uniqueness: { scope: :user_id, message: "has already been liked "}
```


`app/models/product.rb`


### Question 
 belongs_to :user, optional: true 
 
 add
 ```
    has_many :favourites, dependent: :destroy
    has_many :favouriters, through: :favourites, source: :user
 ```

`app/models/review.rb`

```
has_many :likes, dependent: :destroy
has_many :likers, through: :likes, source: :user
```


`models/user.rb` 


    has_many :likes
    has_many :liked_reviews, through: :likes, source: :review

    has_many :favourites
    has_many :favourited_products, through: :favourites, source: :product

`app/models/ability.rb`  for security
```ruby

   can :like, Review do |review|
      user.persisted? && user != review.user
    end

    can :destroy, Like do |like|
      like.user == user
    end

    can :favourite, Product do |product|
      user.persisted? && user != product.user
    end

    can :destroy, Favourite do |favourite|
      favourite.user == user
    end
```

### setup 
`config/routes.rb`

changed to
```
resources :products do
    #resources :reviews, only:[:create, :destroy ]
    resources :reviews, only:[:create, :destroy ] do
        resources :likes, shallow: true, only: [:create, :destroy]
    end
    resources :favourites, shallow: true, only: [:create, :destroy]
end   
```




## Setting Up Controllers

```
rails g controller favourites --no-helper --no-assets --skip-template-engine --no-controller-specs --no-view-specs --no-request-specs
```

```
rails g controller likes --no-helper --no-assets --skip-template-engine --no-controller-specs --no-view-specs --no-request-specs
```

edit `app/controllers/favourites_controller.rb` 

``` like controller 

class LikesController < ApplicationController
    def create
        question = Question.find params[:question_id]
        like = Like.new(question: question, user: current_user)
        if like.save
            flash[:success] = "Question Liked"
        else
            flash[:danger] = like.errors.full_messages.join(', ')
        end
        
        redirect_to question_path(question)
    end
    
    def destroy
        
    end
    
end 

``` 

`controllers/likes_controller.rb`

```
class LikesController < ApplicationController
    before_action :authenticate_user!
    def create
      review = Review.find(params[:review_id])
      like = Like.new(user: current_user, review: review)
      @product = Product.find(params[:product_id])
      if !can?(:like, review)
        redirect_to review, alert: "can't like your own review"
      elsif like.save
        flash[:success] = "Review Liked"
        redirect_to product_path(@product)
      else
        flash[:danger] = like.errors.full_messages.join(", ")
        redirect_to product_path(@product)
      end
    end

    def destroy
      like = current_user.likes.find(params[:id])
      @product = like.review.product
      if can? :destroy, like
        like.destroy
        flash[:success] = "Review unliked"
        redirect_to product_path(@product)
      else
        flash[:danger] = "Can't unlike it"
        redirect_to product_path(@product)
      end
    end
end
```


## edit `app/controllers/products_controller.rb`

```
def show
        @reviews = @product.reviews.order(created_at: :desc)
        @review = Review.new
        
        @favourite = Favourite.find_by(product_id: @product, user_id: current_user)
end
```



# ERB part template

`app/views/layouts/application.html.erb`
```
   <% flash.each do |type, message|%>
    <div class="flush flush-<%= type%>">
      <%= message%>
    </div>
    <% end%> 
 ```   
 

 `app/views/products/show.html.erb` 

```erb
<% if @favourite%>
  <%= link_to @favourite.is_favourite ? "Cancel Favourite" : "Cancel Unavourite", favourite_path(@favourite), class:"btn btn-light ", method: :delete%>
<% else%>
  <%= form_with(url: product_favourites_path(@product), local: true) do |f| %>
  <input type="hidden" name="is_favourite" value="true">
  <%= f.submit "Favourite", class:"btn btn-info" %>
  <% end %>
  <%= form_with(url: product_favourites_path(@product), local: true) do |f| %>
  <input type="hidden" name="is_favourite" value="false">
  <%= f.submit "Unfavourite", class:"btn btn-dark" %>
  <% end %>
<% end %>
```


``` review
<% if review.likes.find_by(user: current_user).present?  && can?(:destroy, review.likes.find_by(user: current_user)) %>
      <%= link_to(
        "Unlike",
        like_path(review.likes.find_by(user: current_user)), 
        class:"btn btn-danger ",
        method: :delete
        ) %>
      <% else can?(:like, review) %>
      <%= link_to(
              "Like",
              product_review_likes_path(@product,review),
              class:"btn btn-success ",
              method: :post
        ) %>
      <% end %>
      <small>
        (<%= pluralize(review.likes.count, "like") %>)
      </small>
```      








# in show.html.erb
add
```
<%= link_to "Like", question_likes_path(@question), method: :post %>
```

# in \app\models\ability.rb
```
  can(:like, Question) do|question|
      user.persisted? && question.user != user
      # user.persisted? check if this user is saved in the database
    end

    can(:destroy, Like) do |like|
      like.user == user
    end
```





<%= link_to "Like", question_likes_path(@question), method: :post %>

<%= link_to "Unlike", like_path(@like), method: :delete %> 






## create a page that show like

in route 
```
 get :liked, on: :collection
    # GET "/questions/liked" 

```

in question_controlls

 def liked
      @questions = current_user.liked_questions
    end


in erb file

```
<h1>
Liked Questions
</h1>

<div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
        <% @questions.each do |question|%>
            <div>
                <h3> <%= link_to question.title, question_path(question) %> </h3>
                <hr />
            </div>
        <% end%>
    </div>
</div>
```

in aplication.html.erb

```
<%=  link_to  'Liked Questions', liked_questions_path  %>
```








# Building Like Feature in Rails (Many to Many) - Summary Notes
Let's say we have two models in Rails:
```ruby
class User < ActiveRecord::Base
  has_many :campaigns, dependent: :nullify
end
```
and
```ruby
class Campaign < ActiveRecord::Base
  belongs_to :user
end
```
And we want to enable the user to like many campaigns and the campaign to be liked by many users. We can do this using `has_and_belongs_to_many` feature of Rails but we will avoid this because using that will limit us on possible future expansion to the `Like` and it will also limit our control over the feature.

The following instructions assume that you have understanding of building CRUD and one to many associations in Rails.

## Setting Up the Join Model
To have the many to many implemented we can set up a third model `Like` that will be used a the model that will join the `User` model and the `Campaign` model. Let's start by creating the `Like` model by running the following in the command line:
```shell
rails g model like user:references campaign:references
```
Then we run:
```shell
rails db:migrate
```
Note that the `Like` model has references to the `User` and the `Campaign`, we can add more attributes to it later if we want to. The `Like` model will look like:
```ruby
class Like < ActiveRecord::Base
  belongs_to :campaign
  belongs_to :user
end
```

## Setting Up the Associations
We then need to set up association in the `User` and `Campaign` models. Let's start by setting up the association in the `Campaign` model:
```ruby
class Campaign < ActiveRecord::Base
  belongs_to :user

  has_many :likes, dependent: :destroy
  has_many :users, through: :likes
end
```
In the above we set up a standard `has_many` association between the `Campaign` and the `Like`. We achieve the many to many association between the `Campaign` and the `User` by using the `has_many` with `:through` option. We will need do a similar thing in the `User` model:
```ruby
class User < ActiveRecord::Base
  has_many :campaigns, dependent: :nullify

  has_many :likes, dependent: :destroy
  has_many :liked_campaigns, through: :likes, source: :campaign
end
```
Note that in the `User` model we had to set up the `has_many` with `through` association a bit differently by adding the `source` option. This is because we used `liked_campaigns` instead of the standard `campaigns` so Rails won't know the other end of the association without giving a `source` option. If you were to use `campaigns` then you will have two: `has_many :campaigns` so one will override the other.

## Association Records
There are many way to associate records in many to many fashions, here are some of them:

### Shovel Operator
```ruby
c = Campaign.first
u = User.first
c.users << u
# or
u.liked_campaigns << c
```

### Creating a `Like` Object
```ruby
c = Campaign.first
u = User.first
l = Like.new(campaign: c, user: u)
l.save
```

### Using `user_ids` or `campaign_ids`
```ruby
c = Campaign.first
u = User.first
c.user_ids = [2,3,4] # assumes that 2, 3 and 4 are valid user ids
# or
u.campaign_ids = [4,5,6] # assumes that 2, 3 and 4 are valid campaign ids
```
Note that using this methods will make it so that the campaign u is only associated with user ids `2`, `3` and `4`. This means that if there were prior associations they will be deleted.

## Validating Uniqueness of Like
If you want to ensure that users only like a single time, you may want to add a validation like this:
```ruby
class Like < ActiveRecord::Base
  belongs_to :user
  belongs_to :campaign

  # this will ensure that the campaign_id / user_id combo is unique
  # this is needed to ensure that the user can only like a campaign once.
  validates :campaign_id, uniqueness: {scope: :user_id}

end
```

## Setting Up Controllers
You can set up controller in a very similar fashion to how it's done with one to many associations. The main difference is remembering that you need to associate with two records instead of one. Let's say we want to implement the ability for users to like campaigns. We start by setting up the routes:
```ruby
# in config/routes.rb
resources :campaigns do
  resources :likes, only: [:create, :destroy]
end
```
We set up routes to be nested under the `campaigns` resources as we will need the campaign `id` to associate with. We don't have to worry about the user `id` because we can get that from the session.

We then create the controller:
```shell
rails g controller likes
```

We can then set up the likes controller `create` action:
```ruby
class LikesController < ApplicationController
  before_action :authenticate_user

  def create
    like          = Like.new
    campaign      = Campaign.find params[:campaign_id]
    like.campaign = campaign
    like.user     = current_user
    if like.save
      redirect_to campaign_path(campaign), notice: "Thanks for liking!"
    else
      redirect_to campaign_path(campaign), alert: "Can't like! Liked already?"
    end
  end

end
```
Note that in the example above we assume that you've set up user authentication with your application so you have a method `authenticate_user` in your `ApplictaionController` that redirects the user to the sign in page if they are not logged in. It also assumes that you have `current_user` method in your `ApplicationController` that gives your the `User` object of the currently logged in user. You can refer to previous notes if you want to learn more about that.

To implement removing a like then you can implement the `destroy` action in the `LikesController` as in:
```ruby
def destroy
  campaign = Campaign.find params[:campaign_id]
  like     = current_user.likes.find params[:id]
  like.destroy
  redirect_to campaign_path(campaign), notice: "Like removed!"
end
```

## Setting Up the Views
You can add a link to Like a Campaign in the campaign `show.html.erb` assuming you have found the `Campaign` and you set it to an instance variable `@campaign`:
```erb
<%= link_to "Like", campaign_likes_path(@campaign), class: "icon-big", method: :post   %>
```
And the link to remove the like:
```erb
<%= link_to "Remove Like", campaign_like_path(@campaign, @campaign.like_for(current_user)), method: :delete %>
```
It's a good idea to have a method in the `Campaign` model to check whether a user has liked this campaign before or not. It can look something like:
```ruby
# In models/campaign.rb  
def liked_by?(user)
  likes.find_by_user_id(user.id).present?
end
```
Then we can re-write our view code to look like:
```erb
<% if user_signed_in? && @campaign.liked_by?(current_user) %>
  <%= link_to "Remove Like", campaign_like_path(@campaign, @campaign.like_for(current_user)), method: :delete %>
<% else %>
  <%= link_to "Like", campaign_likes_path(@campaign), class: "icon-big", method: :post   %>
<% end %>
```
This assumes that you have a method `user_signed_in?` as part of your authentication system that returns `true` or `false` that tells us whether the user is signed in or not.