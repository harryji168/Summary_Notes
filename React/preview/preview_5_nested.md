# Nested Attributes And Cocoon Cheat Sheet
You can use nested attributes to create with two models at the same time. For instance if you `Campaign` model that `has_many` of model `Reward`. You can start by using the `accepts_nested_attributes_for` method in `ActiveRecord`:
```ruby
class Campaign < ActiveRecord::Base

  has_many :rewards, dependent: :destroy
  accepts_nested_attributes_for :rewards
  ...
```
Then if you pass in `rewards_attributes` as part of the campaign parameters you can create `Reward` records at the same time you create the `Campaign` record, as in:
```ruby
c = Campaign.create({title: "Super Campaian", description: "coming soon..", goal: 100000, rewards_attributes: {"0" => {amount: 5, description: "thank you"}, "1" => {amount: 10, description: "super thank you"}}})
```
This will create the `Campaign` record with two `Reward` records associated with it.
## Strong Paramters
If you want to enable using `accepts_nested_attributes_for` with strong parameters then you can add them to your list of permitted parameters as in:
```ruby
  def campaign_params
    params.require(:campaign).permit(:title, :description, :goal, :end_date,
                                     :address, rewards_attributes:
                                        [:amount, :description, :id, :_destroy])
  end
```
The `:id` part of `rewards_attributes` is needed to enable updating a nested record. The `_destroy` is needed to allow deleting a nested record that was created already. More on those in a subsequent section.
## Options for `accepts_nested_attributes_for`
There are two primary options for `accepts_nested_attributes_for` you can use with `ActiveRecord`:
### reject_if
You can use `reject_if` to reject a set of parameters if it meets a certain condition:
```ruby
accepts_nested_attributes_for :rewards, reject_if: :all_blank,
```
Which rejects a set of `Reward` attributes if all the attributes passed are blank, or:
```ruby
accepts_nested_attributes_for :rewards, reject_if: {|x| x[:description].blank? }
```
Which rejects a set of `Reward` attributes if it's `description` is blank.
### allow_destroy
The option enables you to destroy an already created nested record as in:
```ruby
c.update(reward_attributes: {"0" => {id: 2, _destroy: true}})
```
This destroys the `Reward` record with id `2`.
## Integrating with Rails form Helpers
Rails `form_for` enables you to autmatically utilize the  `accepts_nested_attributes_for` feature using `fields_for` as in:
```erb
<%= form_for @campaign do |f| %>
  <%= f.text_field :title %>
  <%= f.text_field :description %>
  ...
  <%= f.fields_for :rewards do |r| %>
    <%= r.text_field :amount %>
    <%= r.text_field :description %>
    <%= r.checkbox :_destroy %>
  <% end %>
  ..
```
You can also integrate with `simple_for` by using `simple_fields_for` as in:
```erb
<%= simple_form_for @campaign do |f| %>
  <%= f.input :title %>
  <%= f.input :description %>
  ...
  <%= f.simple_fields_for :rewards do |r| %>
    <%= r.input :amount %>
    <%= r.input :description %>
    <%= r.input :_destroy, as: :boolean %>
  <% end %>
  ..
```
To get this to work, you must build associated records in your controller:
```ruby
  def new
    @campaign = Campaign.new
    3.times { @campaign.rewards.build }
  end
```
This creates three sets of `Reward` fields.

## Using the Cocoon Gem
In some cases you may want to enable the user to add or remove sets of `Reward` fields in the form. The easiest way to achieve this is by integrating with the [Cocoon gem](https://github.com/nathanvda/cocoon), start by adding the gem to your `Gemfile`:
```ruby
gem 'cocoon'
```
After you run `bundle install` add the following line to you `application.js` to enable adding and removing sets of `Reward` fields with jQuery:
```js
//= require cocoon
```
### Integrating with Rails forms
The `cocoon` gem integrates nicely with Rails `form_for` and with `simple_form`. Start by moving the field sets of `Reward` to be in it's own partial file `/app/views/campaigns/_reward_fields.html.erb` which should look like:
```erb
<div>
  <%= f.input :amount %>
  <%= f.input :description %>
  <%= link_to_remove_association "remove reward", f %>
</div>
```
Then in your `/app/views/campaigns/_form.html.erb` change your form to look like:
```erb
<%= simple_form_for @campaign do |f| %>
  <%= f.input :title %>
  <%= f.input :description %>
  ...
  <h2>Rewards</h2>
  <%= f.error :rewards %>
  <%= f.simple_fields_for :rewards do |r| %>
    <%= render "reward_fields", f: r %>
  <% end %>
  <%= link_to_add_association 'add reward', f, :rewards,
           data: {"association-insertion-method" => :after} %>
  ...
<% end %>
```
This makes your form have an `Add Reward` link that users can add as many sets of `Reward` fields as they wish. For every set of fields there will be a `remove reward` link to remove that specific set of fields.