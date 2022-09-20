

https://stackoverflow.com/questions/34662574/node-js-getting-error-nodemon-internal-watch-failed-watch-enospc

 Node.JS: Getting error : [nodemon] Internal watch failed: watch ENOSPC


echo fs.inotify.max_user_watches=582222 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p

