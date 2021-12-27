https://github.com/phoenixframework/phoenix


https://hexdocs.pm/phoenix/installation.html#phoenix


elixir -v
Erlang/OTP 24 [erts-12.1.5] [source] [64-bit] [smp:8:8] [ds:8:8:10] [async-threads:1] [jit]

Elixir 1.13.0 (compiled with Erlang/OTP 24)


# Phoenix LiveView

Try it now:

Install the Elixir programming language
Install the Phoenix project generator and create your project
mix archive.install hex phx_new
mix phx.new demo --live


 $ cd demo

Then configure your database in config/dev.exs and run:

    $ mix ecto.create

demo\dev.exs
# Configure your database
config :demo, Demo.Repo,
  username: "harryji",
  password: "12345678",


Start your Phoenix app with:

    $ mix phx.server

You can also run your app inside IEx (Interactive Elixir) as:

    $ iex -S mix phx.server


https://www.dairon.org/2020/07/06/simple-rest-api-with-elixir-phoenix.html