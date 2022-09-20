# the default port setting in puma.rb


# Specifies the `port` that Puma will listen on to receive requests; default is 3000.

port        ENV.fetch("PORT") { 16888 }

https://www.py4u.net/discuss/1228834



## : Permission denied - bind(2) for "127.0.0.1" port 168 (Errno::EACCES)

the port already use, change another port