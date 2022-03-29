https://computingforgeeks.com/how-to-install-latest-erlang-on-ubuntu-linux/

echo "deb https://packages.erlang-solutions.com/ubuntu focal contrib" | sudo tee /etc/apt/sources.list.d/erlang.list


https://elixir-lang.org/install.html#gnulinux


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