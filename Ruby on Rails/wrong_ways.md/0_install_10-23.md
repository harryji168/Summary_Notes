# Introduction to Rails
Rails is an open source framework that helps us build web application rapidly. It's built as a Ruby gem. Rails is all Ruby implemented with specific design patterns and ideas to help speed up developing web applications. Rails is a well-known framework with a large supportive community that makes it appealing to be the choice of many companies.

## pre-install --Basic on on Ubuntu 20.04.3 LTS

### 1. RVM Ruby Version Manager

```
gpg --keyserver hkps://keyserver.ubuntu.com --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3 7D2BAF1CF37B13E2069D6956105BD0E739499BDB
```


```shell
rvm version
```
You will get the latest version of the rvm Ruby Version manager.

rvm 1.29.12 (latest) by Michal Papis, Piotr Kuczynski, Wayne E. Seguin [https://rvm.io]


## https://github.com/rvm/ubuntu_rvm

If not installed, open a terminal (Ctrl+Alt+T) and run:
```
sudo apt-get install software-properties-common
```

```
sudo apt-add-repository -y ppa:rael-gc/rvm
sudo apt-get update
sudo apt-get install rvm
```

### 2. Ruby

```shell
ruby --version
```
you will get

ruby 3.0.0p0 (2020-12-25 revision 95aff21468) [x86_64-linux]


### 3.  PostgreSQL

```
sudo apt update
```
```
sudo apt install postgresql postgresql-contrib
```


check version
```shell
psql --version
```
get 

psql (PostgreSQL) 12.8 (Ubuntu 12.8-0ubuntu0.20.04.1)

```shell
psql --version
```
you will get

psql (PostgreSQL) 12.8 (Ubuntu 12.8-0ubuntu0.20.04.1)

## Installing Rails


# Step 1 - Install Nodejs and Yarn

For the Ruby on Rails, we need the JavaScript Runtime for compiling Ruby on the Rails asset pipeline. And for this guide, we will use the Nodejs and Yarn package manager, which can be installed from the Nodesource repository.

First, install some packages dependencies using the following command.

```shell
sudo apt install gcc g++ make
```

Now add the Nodejs Nodesource repository.

```shell
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash
```

Then add the GPG key and repository of the Yarn package manager.

```shell
curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
```

After that, update all available repositories on your system and install the Nodejs and Yarn package manager using the apt command below.

```shell
sudo apt update
sudo apt install yarn nodejs
```

Install Nodejs and Yarn Package Manager

Once all installation is completed, check the Nodejs version using the following command.

```shell
node --version
```

Now you will get the Nodejs 'v14.3.0' installed on your system.

Next, check the Yarn package manager version.

```shell
yarn --version
```

And you will get the Yarn '1.22.4' installed on the system.

As a result, the installation of Nodejs and Yarn package manager for Ruby on Rails has been completed.


# Step 2 - Update RubyGem Package Manager

RubyGems is a Ruby Package Manager, coming with the gem command-line tool. It's automatically installed when we install Ruby on the system.

To update the RubyGem to the latest version, run the following command.

```shell
gem update --system
```

### have error => reinstall in terminal
ERROR:  While executing gem ... (Errno::EROFS)
    Read-only file system @ dir_s_mkdir - /snap/ruby/232/lib/ruby/site_ruby/3.0.0/rubygems

```
gem update
```

You will get the successful message as below.

Updating rubygems-update
Fetching rubygems-update-3.1.3.gem
Successfully installed rubygems-update-3.1.3

RubyGems system software updated
Next, create a new configuration for the RubyGem '~/.gemrc' and disable the installation of package documentation using the command below.

```shell
echo "gem: --no-document" >> ~/.gemrc
```

After that, check the gem version using the gem command below.

```shell
gem -v
```
As a result, you will get the RubyGem updated to the latest version '3.1.3'.


# Step 3 - Install Ruby on Rails
In this step, we will install the latest version of Ruby on Rails through the RubyGem package manager.

Install Ruby on Rails using the gem command below.

```shell
gem install rails
```
Once all installation is completed, check the Ruby on Rails version.

``` on code_server 10-23-2021
sudo apt install ruby-railties
```


```shell
rails --version
```
You will get the Rails 6.1.4.1 version installed on your system.

```on code_server 10-23-2021
rails --version
```
get
Rails 5.2.3

## test and configuration Rails

### Create a new project 'rails_test' with the default database PostgreSQL using the following 'rails' command.

```shell
rails new rails_test -d postgresql -T
```
Now you will get the project directory 'rails_test'

```shell
cd rails_test
```

```on code_server 10-23-2021
bundle install
```

run the rails command below to generate and migrate the database for our Rails project,

```shell
rails db:create
rails db:migrate
```

When all setup is complete, start the default puma rails web server using the command below.

```shell
rails s
```

Now open your web browser and type localhost with port '3000' on the address bar.

```sh
http://localhost:3000/
```

![Screenshot from 2021-10-09 16-20-37](https://user-images.githubusercontent.com/21187699/136676091-ff7e8efa-5e48-45b9-a938-d6bc11ed2bab.png)


use Ctrl-C to stop the server

### Generate the simple CRUD application using the ruby scaffold command as below.

```shell
rails g scaffold Post title:string body:text
rails db:migrate
rails s
```

Now open your web browser and type localhost with port '3000' on the address bar.

```sh
http://localhost:3000/posts
```
### configuration


#### disable mini rack-mini-profiler gem

```sh
http://localhost:3000/?pp=disable
```
more about rack-mini-profiler gem  http://localhost:3000/?pp=help

remove 'rack-mini-profiler'

![Screenshot from 2021-10-09 16-26-57](https://user-images.githubusercontent.com/21187699/136676229-84957d74-c870-44c8-bb78-963147bcb251.png)

open Gemfile remove 
gem 'rack-mini-profiler', '~> 2.0'

![Screenshot from 2021-10-09 16-29-111](https://user-images.githubusercontent.com/21187699/136676571-59a2444b-91eb-4e6a-970d-c8263bfd77a6.png)



#### database configuration 'config/database.yml'.



#### install pry

```shell
sudo apt install pry
```
or 
```shell
gem  install pry
```




Reference document: https://www.howtoforge.com/tutorial/ubuntu-ruby-on-rails/


### Rails - Gem Error while installing pg (1.1.3), and Bundler cannot continue

```shell
sudo apt install postgresql-contrib libpq-dev
```

https://stackoverflow.com/questions/52339221/rails-gem-error-while-installing-pg-1-1-3-and-bundler-cannot-continue