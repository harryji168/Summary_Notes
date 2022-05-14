# Introduction to Rails

https://linoxide.com/how-to-install-ruby-on-rails-on-ubuntu-20-04/

# Install Ruby on Ubuntu

```
sudo apt update
```
```
sudo apt install git curl libssl-dev libreadline-dev zlib1g-dev autoconf bison build-essential        libyaml-dev libreadline-dev libncurses5-dev libffi-dev libgdbm-dev
```

```
curl -sL curl -fsSL https://github.com/rbenv/rbenv-installer/raw/HEAD/bin/rbenv-installer | bash
```

To set path in .bashrc, run the following command:
```
$ echo 'export PATH="$HOME/.rbenv/bin:$PATH"' >> ~/.bashrc
$ echo 'eval "$(rbenv init -)"' >> ~/.bashrc
$ exec $SHELL
```

```
 rbenv install -l
```
```
rbenv install 3.0.0
rbenv global 3.0.0
```
```
ruby -v
```

# Install NodeJS on Ubuntu 20.04
```
curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -
```

```
sudo apt install -y nodejs
```
```
node -v
```
```
curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
```
```
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
```
```
sudo apt-get update && sudo apt-get install yarn
```

# Install Rails on Ubuntu

```
gem install rails
```

```
rails -v
```

# Install PostgreSQL

```
 sudo apt install postgresql postgresql-contrib libpq-dev -y
```
```
sudo systemctl start postgresql
sudo systemctl enable postgresql
```
```
sudo -i -u postgres psql
```

>create role harryji with createdb login password '12345678';


 \du

 \q

 # clone projects

``` 
 git clone https://github.com/harryji168/Awesome_Answers
 ```

```
yarn add bootstrap@next jquery @popperjs/core
bundle
bundle exec rake webpacker:install
rails db:create
rails db:migrate
rails db:seed
rails s 
```

# install ruby 2.6.3

<<<<<<< HEAD
=======
rvm reinstall ruby-2.6.3

>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
```
rvm install "ruby-2.6.3"
gem install bundler:2.0.2
```

change files
`config\webpacker.yml`
```
#check_yarn_integrity: true
#check_yarn_integrity: false
```
```
yarn install --check-files
```

### error 
Fetching gem metadata from https://rubygems.org/............
Your bundle is locked to mimemagic (0.3.5) from rubygems repository https://rubygems.org/ or installed locally, but that version can no longer be found in that source. That means the author of mimemagic (0.3.5) has removed it.
You'll need to update your bundle to a version other than mimemagic (0.3.5) that hasn't been removed in order to install.

You can modify your Gemfile as below:
```
gem 'mimemagic', github: 'mimemagicrb/mimemagic', ref: '01f92d86d15d85cfd0f20dabd025dcbd36a8a60f'
```

https://stackoverflow.com/questions/66919504/your-bundle-is-locked-to-mimemagic-0-3-5-but-that-version-could-not-be-found


#  Can't find Python executable "python"
```
sudo apt-get update
sudo apt-get install python2.7    
ln -s /usr/bin/python2.7 /usr/bin/python 

```

https://stackoverflow.com/questions/23571257/cant-find-python-executable-python