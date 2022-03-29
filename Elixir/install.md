
## https://qiita.com/akkiii/items/6d0918e32e6ddf947b45


Various installations
Required for Erlang
https://computingforgeeks.com/how-to-install-latest-erlang-on-ubuntu-linux/
https://computingforgeeks.com

sudo apt-get update
sudo apt-get install automake autoconf libreadline-dev libncurses-dev \
libssl-dev libyaml-dev libxslt1-dev libffi-dev libtool unixodbc-dev \
libwxgtk3.0-gtk3-dev libgl1-mesa-dev  libglu1-mesa-dev libssh-dev xsltproc fop \
libxml2-utils

sudo apt-get -y install build-essential libncurses5-dev openssl
sudo apt-get install curl git-core

sudo apt-get install openjdk-15-jdk default-jdk


### 
Ubuntu or Debian
Add Erlang Solutions repository: wget https://packages.erlang-solutions.com/erlang-solutions_2.0_all.deb && sudo dpkg -i erlang-solutions_2.0_all.deb
Run: sudo apt-get update
Install the Erlang/OTP platform and all of its applications: sudo apt-get install esl-erlang
Install Elixir: sudo apt-get install elixir

Checking the installed version of Elixir
elixir --version


Erlang/OTP 24 [erts-12.1.5] [source] [64-bit] [smp:8:8] [ds:8:8:10] [async-threads:1] [jit]

Elixir 1.13.0 (compiled with Erlang/OTP 24)


https://elixir-companies.com/