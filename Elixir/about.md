https://en.wikipedia.org/wiki/Elixir_(programming_language)

José Valim

Sao Paulo, Brazil, South America

https://www.crunchbase.com/person/jos%C3%A9-valim


https://elixir-lang.org/install.html


Ubuntu or Debian
Add Erlang Solutions repository: wget https://packages.erlang-solutions.com/erlang-solutions_2.0_all.deb && sudo dpkg -i erlang-solutions_2.0_all.deb
Run: sudo apt-get update
Install the Erlang/OTP platform and all of its applications: sudo apt-get install esl-erlang
Install Elixir: sudo apt-get install elixir



Checking the installed version of Elixir
Once you have Elixir installed, you can check its version by running elixir --version.

Elixir 1.12 or later
Phoenix is written in Elixir, and our application code will also be written in Elixir. We won't get far in a Phoenix app without it! The Elixir site maintains a great Installation Page to help.

If we have just installed Elixir for the first time, we will need to install the Hex package manager as well. Hex is necessary to get a Phoenix app running (by installing dependencies) and to install any extra dependencies we might need along the way.

Here's the command to install Hex (If you have Hex already installed, it will upgrade Hex to the latest version):

mix local.hex