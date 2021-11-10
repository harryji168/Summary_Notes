# From start to finish, learn how to package your Ruby code in a gem.

https://guides.rubygems.org/make-your-own-gem/

I started with just one Ruby file for my hola gem, and the gemspec. You’ll need a new name for yours (maybe hola_yourusername) to publish it. Check the Patterns guide for basic recommendations to follow when naming a gem.

% tree
.
├── hola.gemspec
└── lib
    └── hola.rb
Code for your package is placed within the lib directory. The convention is to have one Ruby file with the same name as your gem, since that gets loaded when require 'hola' is run. That one file is in charge of setting up your gem’s code and API.

The code inside of lib/hola.rb is pretty bare bones. It just makes sure that you can see some output from the gem:


gem build hola_harryji.gemspec

gem push hola_harryji-0.0.0.gem


Pushing gem to https://rubygems.org...
Successfully registered gem: hola_harryji (0.0.0)
