https://www.botreetechnologies.com/blog/introducing-jquery-in-rails-6-using-webpacker/ 
# Now, How we will use Jquery in Rails 6??
In our Rails application run below command to add jQuery.
```
$ yarn add jquery
```

It will save the dependency of jquery to our application.

# Now to verify jquery is installed or not, check below files
package.json => "jquery": "^3.3.1",
yarn.lock => jquery@^3.3.1:

# Add below code in environment.js
const webpack = require('webpack')
environment.plugins.prepend('Provide',
  new webpack.ProvidePlugin({
    $: 'jquery/src/jquery',
    jQuery: 'jquery/src/jquery'
  })
)
view rawcode_in_environment.js hosted with ❤ by GitHub
Now, our file looks like,

output 3 using rails 6 javascript
The path ‘jquery/src/jquery’ indicates the jquery installed in node_modules directory having sub directory ‘jquery/src’ and which contains jquery.js file there.

# Require jquery in application.js file.

require('jquery')

require("@rails/ujs").start()
require("turbolinks").start()
require("@rails/activestorage").start()
require("channels")
require("jquery")
view rawapplication.js hosted with ❤ by GitHub
