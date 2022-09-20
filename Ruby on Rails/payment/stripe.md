# Gemfile

gem 'stripe'


# https://rails.devcamp.com/trails/ruby-gem-walkthroughs/campsites/payment/guides/how-to-integrate-stripe-payments-in-a-rails-application-charges

touch config/initializers/stripe.rb
In that file you can add the following configuration code:

# config/initializers/stripe.rb

Rails.configuration.stripe = {
  :publishable_key => ENV['PUBLISHABLE_KEY'],
  :secret_key      => ENV['SECRET_KEY']
}

Stripe.api_key = Rails.configuration.stripe[:secret_key]
We'll need to include these environment variables securely, let's install the dot-env gem to handle this for us. Add the gem to the Gemfile and run bundle:

# Gemfile

gem 'dotenv-rails', :groups => [:development, :test]
Now let's create the file that will store our environment variables:

touch .env
Add this file to your .gitignore file since you wouldn't want to share your secret keys with the world:

# .gitignore

# Ignore environment variables
.env
You can verify that this is working by going to the terminal and typing git status, it shouldn't list that the .env file at all. Now add in the secret keys to the .env file with the syntax:

PUBLISHABLE_KEY="Your publishable key from stripe here"
SECRET_KEY="Your secret key from stripe here"
You can get your keys by signing up for a Stripe account. That's it for setting up the Stripe configuration, nice and easy, right?

Creating a charges controller
Following the Stripe prescribed pattern, let's create a charges controller that will let us take advantage of RESTful routes and data flow and let us work with the Stripe API, run the following generator:

rails g controller charges new create
This will generate the controller and give us the controller actions of new and create. Let's update the routes file like below:

# config/routes.rb

Rails.application.routes.draw do
  resources :charges, only: [:new, :create]
  devise_for :users
  resources :posts
  root to: 'posts#index'
end
These two resource routes for charges will map directly to the actions that were generated with the controller. Now let's implement a basic version of the code in the controller:

# app/controllers/charges_controller.rb

def new
end

def create
  @amount = 500

  customer = Stripe::Customer.create(
    email: params[:stripeEmail],
    source: params[:stripeToken]
  )

  charge = Stripe::Charge.create(
    customer: customer.id,
    amount: @amount,
    description: 'Rails Stripe customer',
    currency: 'usd'
  )

rescue Stripe::CardError => e
  flash[:error] = e.message
  redirect_to new_charge_path
end
This is way too much code for the controller's create method, however our first priority is to get this working, we'll refactor this code into its own class at the end of the guide. So what is this code doing? Let's walk through it step by step:

It's setting a default amount that will be charged

It's creating a stripe customer, the Stripe::Customer.create code is a call to the stripe gem. Here it's passing the customer's email address and the stripeToken in as arguments.

Then it calls the Charge module, passing in a number of attributes that we want to pass to Stripe's API.

Lastly it catches any errors and redirect the user to the new path if any errors occur.

Creating the payment form view
With the controller and routes taken care of to handle the data flow, let's implement the payment form. First create a few new pages:

touch app/views/charges/new.html.erb
touch app/views/charges/create.html.erb
The new view will show the form and the create view will be our Thank you page.

And add in the following code that connects to the Stripe JavaScript code:

<!-- app/views/charges/new.html.erb -->

<%= form_tag charges_path do %>
  <article>
    <% if flash[:error].present? %>
      <div id="error_explanation">
        <p><%= flash[:error] %></p>
      </div>
    <% end %>
    <label class="amount">
      <span>Amount: $5</span>
    </label>
  </article>

  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<%= Rails.configuration.stripe[:publishable_key] %>"
          data-description="A month's subscription"
          data-amount="500"
          data-locale="auto"></script>
<% end %>
This form communicates with the Stripe JavaScript code, which handles the process of rendering the form and it passes in some key values, such as:

The publishable_key

The product description

The amount

And the locale, which dictates the currency that will be rendered in the form.

It's important to realize that none of these items have anything to do with the code in our controller, these are simply arguments passed into the form so it knows what to render to the user. For example, if you change the data-amount value it won't override the value that will be charged to the user, that's handled in the controller, during our refactor stage I'll show you how you can make sure these items always match.

In the create.html.erb file let's add in some code for our thank you page:

<!-- app/views/charges/create.html.erb -->

<h2>Thanks, you paid <strong>$5.00</strong>!</h2>
Creating a Charge