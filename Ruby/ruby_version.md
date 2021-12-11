 
https://linoxide.com/how-to-install-ruby-on-ubuntu-20-04/


$ sudo apt update
Run the following command to install dependencies.

$ sudo apt install git curl libssl-dev libreadline-dev zlib1g-dev autoconf bison build-essential        libyaml-dev libreadline-dev libncurses5-dev libffi-dev libgdbm-dev
After installing dependencies, run the following command to clone both Rbenv and Ruby-build repositories at Github.

$ curl -fsSL https://github.com/rbenv/rbenv-installer/raw/HEAD/bin/rbenv-installer | bash
Now, run the following commands to set PATH in .bashrc:



$ echo 'export PATH="$HOME/.rbenv/bin:$PATH"' >> ~/.bashrc
$ echo 'eval "$(rbenv init -)"' >> ~/.bashrc
$ exec $SHELL
Now you can install any available version of Ruby using Rbenv. Run the following command to list available versions.

$ rbenv install -l
You will get the output as:


Listing Available Ruby versions
You can install the version you want by running the following command. For this article, I am installing Ruby 3.0.0.

$ rbenv install 3.0.0
This will take a few minutes to complete.

To set the global variable run the following command:

$ rbenv global 3.0.0
Replace the version number with your 