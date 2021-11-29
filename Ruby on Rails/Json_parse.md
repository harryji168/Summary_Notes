https://ruby-doc.org/stdlib-3.0.0/libdoc/json/rdoc/JSON.html

To make module JSON available in your code, begin with:

require 'json'


Parsing JSON Arrays¶ ↑
When source is a JSON array, #parse by default returns a Ruby Array:

json = '["foo", 1, 1.0, 2.0e2, true, false, null]'
ruby = JSON.parse(json)
ruby # => ["foo", 1, 1.0, 200.0, true, false, nil]
ruby.class # => Array


ruby['data'].first["latitude"]