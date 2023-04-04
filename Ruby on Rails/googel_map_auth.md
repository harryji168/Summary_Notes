ENV[“GITHUB_KEY”] = ‘REPLACEWITHAPIKEY’
ENV[“GITHUB_SECRET”] = ‘REPALCEWITHAPISECRET’
9:57
Create config/initializers/omniauth.rb and code the configurations:
9:57
Rails.application.config.middleware.use OmniAuth::Builder do
    provider :github, ENV['GITHUB_KEY'], ENV['GITHUB_SECRET'], scope: "read:user, user:email"
end

rails g controller callbacks index --no-helper --no-assets --no-controller-specs --no-template-engine


https://www.knowband.com/blog/user-manual/get-github-client-id-client-secret-api-details/

20
https://github.com/settings/applications/new


http://localhost:3000/auth/github/callback

Settings -> Developer Settings -> Oauth App -> New App


class CallbacksController < ApplicationController
  def index
    oauth_data =require.env
  end
end


# development.rb


config.hosts.clear 


#
rails g migration add_omniauth_fields_to_users uid:string provider:string oauth_token:string oauth_raw_data:string



class AddOmniauthFieldsToUser < ActiveRecord::Migration[6.1]
  def change
    add_column :users, :uid, :string
    add_column :users, :provider, :string
    add_column :users, :oauth_token, :string
    add_column :users, :oauth_raw_data, :string
  end
end


https://console.cloud.google.com/project/_/apiui/credential?_ga=2.147201716.2098392703.1621212204-738629856.1621212204


gem 'geocoder'
gem 'gmaps4rails'
gem 'underscore-rails'

yarn add underscore

rails g migration AddGeoCodeToUser latitude:float longitude:float
 
rails g migration AddAddressToUser address:string
 
user.rb:
11:53
geocode_by :address
    after_validation :geocode
11:55
In users_controller.rb:
11:55
def show
        @user = User.find params[:id]
    end

    
    enable google map