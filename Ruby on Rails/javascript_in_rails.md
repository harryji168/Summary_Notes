https://www.freecodecamp.org/news/how-to-add-javascript-to-your-rails-6-app/

app/javascript/packs/

# Adding a script that will be used by all views

require("@rails/ujs").start()
require("turbolinks").start()
require("@rails/activestorage").start()
require("channels")

console.log('Hello from application.js')



# Adding a script that will be used by a specific file
If you want your JavaScript to be available for only a specific view, then you can use the javascript_pack_tag to import that specific file:

<h1 class='text-center'>I want my JS here only</h1>

<%= javascript_pack_tag 'my_js' %>
app/views/posts/index.html.erb

console.log('Hello from My JS')
app/javascript/packs/my_js.js