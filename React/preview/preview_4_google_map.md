# Geocoding and Google Maps with Rails Summary
Geocoding is converting an address or an ip address to longitude and latitude number to be easily displaying on a map or to make it easier to calculate a distance to another set of longitude and latitude.
## How to Geocode
Geocoding requires a third party service that can performa the task. Google has the best service for that but there are others. Make sure to check out their terms of use if you want to take your app to production.
## Using Geocoder
The most popular gem with Rails is the `Geocode` gem: [https://github.com/alexreisner/geocoder](https://github.com/alexreisner/geocoder).
Let's start by adding the gem to our `Gemfile`:
```ruby
#...
gem "geocoder"
#...
```
After running `bundle` you're likely going to need to add two fields to the model you'd like to geocode in order to store the longitude and latitude. For instance, if we want to add geocoding to the `Campaign` model you can do:
```ruby
rails g migration add_geocoding_fields_to_campaigns address longitude:float latitude:float
```
Then run `rails db:migrate`. Note you don't have to store the `address` information if you don't need it but it could be a good idea if you want to display it or make other uses of it in the future.
Now add the following to your `Campaign` model:
```ruby
class Campaign < ActiveRecord::Base
  # ...
  geocoded_by :address
  after_validation :geocode
  # ...
end
```
This will take the address given in the `campaign` record and connects to the geocoding external service which is `Google` by default and then set the `longitude` and `latitude` before saving your model. If you're doing a lot of geocoding you may consider moving the geocoding operation to a background job because you're connecting to an external service.
## Displaying a Single Pin On a Google Map
Once we have the `longitude` and `latitude` on a record, we're able to use those to display a pin on a map. For that we'll need a third-party map library. Google provides the most reliable and accurate one. If you want to use it for production, make sure to check their terms of use. The most popular gem to use with Rails for integrating with Google Maps is `GMaps4Rails`: [https://github.com/apneadiving/Google-Maps-for-Rails](https://github.com/apneadiving/Google-Maps-for-Rails).
### Integrating with GMaps4Rails
Let's start by adding the gem to our `Gemfile`, we will need to add `underscore-rails` gem with it as well because `gmaps4rails` depending on the underscore javascript library:
```ruby
#...
gem 'underscore-rails'
gem 'gmaps4rails'
#..
```
After running `bundle` add the following to your `app/assets/javascript/application.js`:
```js
//= require underscore
//= require gmaps/google
```
Then add the following to your `app/views/layouts/application.html.erb` in the `<head>` section:
```html
<script src="//maps.google.com/maps/api/js?v=3.18&sensor=false&client=&key=&libraries=geometry&language=&hl=&region="></script> 
<script src="//google-maps-utility-library-v3.googlecode.com/svn/tags/markerclustererplus/2.0.14/src/markerclusterer_packed.js"></script>
<script src='//google-maps-utility-library-v3.googlecode.com/svn/tags/infobox/1.1.9/src/infobox_packed.js' type='text/javascript'></script> <!-- only if you need custom infoboxes -->
```
This will include external javascript libraries needed to show the maps. In your view file such as `app/views/campaigns/show.html.erb` you can add:
```html
<div>
  <div id="map" style='height: 400px;'></div>
</div>


<script type="text/javascript">
  handler = Gmaps.build('Google');
  handler.buildMap({ provider: {}, internal: {id: 'map'}}, function(){
    markers = handler.addMarkers([
      {
        "lat": <%= @campaign.latitude %>,
        "lng": <%= @campaign.longitude %>,
        "infowindow": "<%= @campaign.title %>"
      }
    ]);
    handler.bounds.extendWith(markers);
    handler.fitMapToBounds();
  });
</script>
```
## Displaying Multiple Pins on a Map
You're able to `gmaps4rails` to display multiple pins on the map by passing a array of coorodinates to the javascript code that renders the maps. You'll see how we display nearby campaigns with `geocoder` and `gmaps4rails`.
### Fetching Nearby Campaigns
Assuming that the user has longitude and latitude coordinates or you fetch those information from something like ip address or the browser. You're able to find `nearby` records using a feature from the `geocoder` gem:
```ruby
user_coordinates = [current_user.latitude, current_user.longitude]
@campaigns = Campaign.near(user_coordinates, 40, units: :km)
```
This will fetch all the `Campaign` which have coordinates with `40km` of the `user_coordinates`.
### Generating the JSON
The easier way to display multiple pins on the maps is to generate a JSON that contains all the cooridnates information and we can do this using a marker feature with `gmap4rails`. We can create a helper method in any helper file such as `app/helpers/campaigns_helper.rb` that looks like:
```ruby
def campaigns_json(campaigns)
  Gmaps4rails.build_markers(campaigns) do |campaign, marker|
    marker.lat        campaign.latitude
    marker.lng        campaign.longitude
    marker.infowindow campaign.title
  end
end
```
Then we can make use of this method in our view file to display multiple pins, we can modify the `<script>` content we added earlier for a signle pin to look like:
```html
<script type="text/javascript">
  handler = Gmaps.build('Google');
  handler.buildMap({ provider: {}, internal: {id: 'map'}}, function(){
    markers = handler.addMarkers(<%= raw campaigns_json(@campaigns).to_json %>);
    handler.bounds.extendWith(markers);
    handler.fitMapToBounds();
  });
</script>
```
Note that we need to add `raw` before displaying the json so Rails doesn't automatically escape it.