https://github.com/livebook-dev/livebook

git clone https://github.com/livebook-dev/livebook.git
cd livebook
mix deps.get --only prod

# Run the Livebook server
MIX_ENV=prod mix phx.server



git clone https://github.com/livebook-dev/livebook.git
cd livebook
mix dev.setup

# Run the Livebook server
mix phx.server

# To test escript
MIX_ENV=prod mix escript.build
./livebook server