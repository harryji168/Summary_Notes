https://hexdocs.pm/phoenix/installation.html

mix archive.install hex phx_new



mix help phx.new


https://github.com/inotify-tools/inotify-tools/wiki





https://hexdocs.pm/phoenix/up_and_running.html

mix phx.new hello


We are almost there! The following steps are missing:

    $ cd hello

Then configure your database in config/dev.exs and run:

    $ mix ecto.create

Start your Phoenix app with:

    $ mix phx.server

You can also run your app inside IEx (Interactive Elixir) as:

    $ iex -S mix phx.server




    ook at config/dev.exs.

...
# Configure your database
config :hello, Hello.Repo,
  username: "postgres",
  password: "postgres",
  database: "hello_dev",
  hostname: "localhost",
  show_sensitive_data_on_connection_error: true,
  pool_size: 10
  