
# webpack.config.js

devServer: {
  port: 9000
}


# You can use the devServer.port option in the webpack config.

devServer: {
  port: 9000
}


Alternatively you can use the --port CLI option instead of changing your webpack config. So you'd run it like this

webpack-dev-server --port 9000 [other options]


https://stackoverflow.com/questions/42963674/how-do-i-change-webpack-dev-servers-default-port-from-8080-to-a-different-port/42963712