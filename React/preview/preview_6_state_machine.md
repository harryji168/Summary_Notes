# State Machine with AASM Summary
State machines are very useful in web applications when a model goes through multiple states and you want to control what happens when transitioning from one state to another. One of the most popular gems to use with Rails to implement state machines is [AASM](https://github.com/aasm/aasm). Start by adding the gem to you `Gemfile`:
```ruby
gem 'aasm'
```
Then run `bundle` to install the gem. In order to include the gem in an `ActiveRecord` model add the following line:
```ruby
class Campaign < ActiveRecord::Base
  include AASM
  # ...
end
```
For that to work make sure that you have `aasm_state` column of type `string` in the `campaigns` table. If you don't have one then you can add a field using a migration:
```shell
rails g migration add_aasm_state_to_campaigns aasm_state:string
```
then run:
```
rails db:migrate
```
This provides you with a set of methods that you can use to set up the state machine. Start by defining the states that your model can go through:
```ruby
  aasm do
    state :draft, initial: true
    state :published
    state :funded
    state :unfunded
    state :cancelled
  end
```
As you notice you can use the `state` method to define a state. Make sure to have one of them with `initial: true` option so it will be used as the default state. After that, define the rules by which you want the transitions to happen from one state to another, you can do that by using the `event` method provided by `AASM` as in:
```ruby
aasm do
  # ...
  event :publish do
    transitions from: :draft, to: :published
  end
  # ...
end
```
This means that you can only go to `published` state from the `draft` state and not from any other state. AASM provides you with handy methods to help you check and change the state of your model, here is an example in Rails console:
```irb
> c = Campaign.last
> c.draft?
=> true
> c.published?
=> false
> c.publish
=> true
> c.published?
=> true
```
So for every state you define, you have a method that matches the state name such as `publish` that transitions to that state and a method `published?` that returns `true` or `false` depending on whether the state of the model is published or not.
If you try to transition to a state in a way that wasn't defined in your state machine definition then `AASM` will throw an exception. If you want it to just give return `false` instead of throwing an exception then add the ` whiny_transitions: false` argument to the `aasm` methods as in:
```ruby
 aasm whiny_transitions: false do
  ...
end
```
Make sure that you cover the transitions for all of your states in your state machine so the final version will look something like this:
```ruby
aasm whiny_transitions: false do
  state :draft, initial: true
  state :published
  state :funded
  state :unfunded
  state :cancelled
  state :archived

  event :publish do
    transitions from: :draft, to: :published
  end

  event :fund do
    transitions from: :published, to: :funded
  end

  event :expire do
    transitions from: :published, to: :unfunded
  end

  event :cancel do
    transitions from: :published, to: :cancelled
  end

end
```