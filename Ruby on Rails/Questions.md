PM_Tool

# how to models: Project: title (required & unique)
# how to models:Task: title (required & unique within a project) and due_date

### https://boringrails.com/tips/rails-unique-scope

class Project < ApplicationRecord
  belongs_to :account

  has_many :tasks

  validates :name, presence: true, uniqueness: { scope: :account_id }
end


###  follow scaffols_crud?
one table is good, more tables not good



### change ruby version 

## whereis ruby
```
whereis ruby
```
cd /home/harry/.rvm/rubies

## which ruby
/home/harry/.rvm/rubies/ruby-3.0.0/bin/ruby



## run command line file in rails
https://ruby-doc.org/core-2.0.0/IO.html#method-c-popen

in controller
```
IO.popen(["ls", "./", :err=>[:child, :out]]) {|ls_io|
            @ls_result_with_error = ls_io.read 
 }
 ```

 in erb 
``` 
<%= @ls_result_with_error %> 
```


### Question 
 belongs_to :user, optional: true  

 optional could leave empty


 ### Warning: the running version of Bundler is older than the version that created the lockfile error

 ```
 gem install bundler:2.1.4
```

# Your bundle is locked to mimemagic (0.3.5), but that version could not be found in any of the sources listed in your Gemfile [duplicate]
```
bundle update mimemagic
```
https://stackoverflow.com/questions/66919504/your-bundle-is-locked-to-mimemagic-0-3-5-but-that-version-could-not-be-found


# couldn't find file 'bootstrap' with type 'text/css' Checked in these paths: 

```
yarn add bootstrap
```


# run rails c have error message
Traceback (most recent call last):         5: from <internal:gem_prelude>:1:in `<internal:gem_prelude>'         4: from <internal:gem_prelude>:1:in `require'         3: from /usr/lib/ruby/2.7.0/rubygems.rb:1424:in `<top (required)>'         2: from /usr/lib/ruby/2.7.0/rubygems.rb:1424:in `require'         1: from /usr/lib/ruby/vendor_ruby/rubygems/defaults/operating_system.rb:49:in `<top (required)>' /usr/lib/ruby/vendor_ruby/rubygems/defaults/operating_system.rb:50:in `<class:Specification>': undefined method `rubyforge_project=' for class `Gem::Specification' (NameError)

it cause by use default ruby 2.7 ,a nd project is ruby 3.0


# rails webpacker:install
Webpacker::Manifest::MissingEntryError in Submissions#index
 
Showing G:/../../../myGroceryList/app/views/home/index.html.erb where line #1 raised:

Webpacker can't find hello_react.js in G:/../../../myGroceryList/public/packs/manifest.json. Possible causes:

You want to set webpacker.yml value of compile to true for your environment
unless you are using the webpack -w or the webpack-dev-server.
webpack has not yet re-run to reflect updates.
You have misconfigured Webpacker's config/webpacker.yml file.
Your webpack configuration is not creating a manifest.
Your manifest contains:
{
}

```
bundle exec rake webpacker:install
```


```
rails webpacker:install
```
https://stackoverflow.com/questions/58270161/webpacker-cant-find-application