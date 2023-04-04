https://stackoverflow.com/questions/15813819/remove-heroku-completely

if you have installed using :

$ sudo snap install --classic heroku
uninstall using :

$ which heroku
/snap/bin/heroku
$ sudo rm snap/bin/heroku
$ heroku --version
heroku : command not found