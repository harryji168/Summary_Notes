
build tag
```
rails g model tag
```

```
rails g model tagging product:references tag:references
```

```
rails g model vote user:references review:references
```


db/migrate/20210722181215_create_tags.rb 
add t.string :name
```
class CreateTags < ActiveRecord::Migration[6.1]
  def change
    create_table :tags do |t|
      t.string :name
      t.timestamps
    end
  end
end
```
/db/migrate/20210722181605_create_taggings.rb .no change


 db/migrate/20210722190006_create_votes.rb
```
  t.boolean :is_vote
```

run 
```
rails db:migrate
```

check schema




# add validation

`app/models/product.rb`
```
    # lab for more many to many 
    has_many :taggings, dependent: :destroy
    has_many :tags, through: :taggings
```

`app/models/review.rb`
```
 # lab for more many to many
  has_many :votes, dependent: :destroy
  has_many :voters, through: :votes, source: :user
```  

`app/models/tag.rb`
```
has_many :taggings, dependent: :destroy
    has_many :products, through: :taggings

    validates :name, presence: true, uniqueness: { case_sensitive: false }
    before_validation :downcase_name

    private

    def downcase_name
      self.name&.downcase!
    end
```
`app/models/tagging.rb`

```ruby
belongs_to :tag
belongs_to :product
validates :tag_id, uniqueness: { scope: :product_id, message: "already has that tag"}
```  

`app/models/user.rb`
``` 
# lab for more many to many
has_many :votes
has_many :vote_reviews, through: :votes, source: :review
 ``` 
`app/models/vote.rb`
```
  belongs_to :review
  belongs_to :user
  validates :review_id, uniqueness: { scope: :user_id, message: "has already been voted "}
```  


`app/models/ability.rb `
 #lab for more many to many
    can :vote, Review do |review|
      user.persisted? && user != review.user
    end

    can :destroy, Vote do |vote|
      vote.user == user
    end


# seed
```     
Product.destroy_all
Review.destroy_all
User.destroy_all
Like.destroy_all
Tag.destroy_all

NUM_PRODUCTS = 50
NUM_USERS = 5
NUM_TAGS = 20
PASSWORD = "123"
```

```sh
rails db:seed

Like.destroy_all
Tag.destroy_all
```

# routers.rb
```
 resources :votes, shallow: true, only: [:create, :destroy]
 ```
 ```
  resources :tags,only: [:index]
 ``` 


# controller
 
`app/controllers/products_controller.rb`
```
if params[:tag]
  @tag = Tag.find_or_initialize_by(name: params[:tag])
  @products = @tag.products.order(created_at: :desc)
else
  @products = Product.all
end
```
```
 params.require(:product).permit(:title,:description,:price, {tag_ids: []})
```


```
rails g controller tags --no-helper --no-assets --skip-template-engine --no-controller-specs --no-view-specs --no-request-specs
```

`app/controllers/tags_controller.rb`

```
class TagsController < ApplicationController
    def index
        @tags = Tag.all
    end
end
```

```
rails g controller votes --no-helper --no-assets --skip-template-engine --no-controller-specs --no-view-specs --no-request-specs
```

`app/controllers/votes_controller.rb` 

```
  def create
        @review = Review.find(params[:review_id])
        vote = Vote.new(is_vote: params[:is_vote], user:current_user, review: @review)
        if !can?(:vote, @review)
            redirect_to product_path(@review.product), alert: "can't vote your own review"
        elsif vote.save
          flash[:success] = "Review Voted"
          redirect_to product_path(@review.product)
        else
          flash[:danger] = vote.errors.full_messages.join(", ")
          redirect_to product_path(@review.product)
        end
    end

    def destroy
        vote = current_user.votes.find(params[:id])
        @product = vote.review.product
        if can? :destroy, vote
            vote.destroy
            flash[:success] = "Canceled"
            redirect_to product_path(@product)
        else
            flash[:danger] = "Can't canceled"
            redirect_to product_path(@product)
        end
    end
```

# erb 

`app/views/products/_form.html.erb`



<div class="form-group">
    <%= form.collection_check_boxes :tag_ids, Tag.order(name: :asc), :id, :name do |b| %>
        <div class="tag-wrapper">
        <%= b.check_box %>
        <%= b.text.humanize %>
        </div>
    <% end %>
</div>
 

 
 `app/views/products/index.html.erb`
 ```
<% if @tag.present? %>
  <h6>
    Showing products tagged by
    <span class="badge badge-pill badge-primary">
      <%= @tag.name %>
    </span>
  </h6>
<% end %>
 ```

`app/views/products/show.html.erb `
```
  Tags:   <%#= @product.tags.map(&:name).join(', ')%>
      <% @product.tags.each do |tag|  %>
            <%= link_to(
                  tag.name,
                  tags_path,
                  class: "badge badge-pill badge-primary"
                  ) %>
          <% end %>
          <br>
``` 

```
 |
      <% vote = review.votes.find_by(user: current_user) %>
      <% if vote%>
        <%= link_to vote.is_vote ? "Cancel Vote Up" : "Cancel Vote Down", vote_path(vote), class:"btn btn-light ", method: :delete%>
      <% elsif can?(:vote, review)%>
        <%= form_with(url: product_review_votes_path(@product,review), local: true) do |f| %>
        <input type="hidden" name="is_vote" value="true">
        <%= f.submit "Vote Up", class:"btn btn-info" %>
        <% end %>
        <%= form_with(url: product_review_votes_path(@product,review), local: true) do |f| %>
        <input type="hidden" name="is_vote" value="false">
        <%= f.submit "Vote Down", class:"btn btn-dark" %>
        <% end %>
      <% end %>
      |      
      <small>
        (<%= pluralize(review.votes.where(is_vote: true).count, "vote up") %>)
      </small>
      |      
      <small>
        (<%= pluralize(review.votes.where(is_vote: false).count, "vote down") %>)
      </small>
      ```


      add files
      `app/views/tags/index.html.erb`
      ```
       <h1>Tags Index</h1> 
        Tags:   <% @tags.each do |tag|  %>
            <%= link_to(
                  tag.name,
                  products_path(tag: tag.name),
                  class: "badge badge-pill badge-primary"
                  ) %>
          <% end %>
      ```