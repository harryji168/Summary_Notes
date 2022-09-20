Here an example:

sudo nano /etc/environment
i chose to add the path through /etc/environment (remember you can't use shell commands).

PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/node-v9.6.1-linux-x64/bin:/snap/bin
You can see i add it at the end (that simple).
Reboot your computer or logout and login back (PAM script handle the construction of the PATH from /etc/environment at session creation time)

If You want to have the effect take place right away, execute:

source /etc/environment && export PATH


## do

code /etc/environment

/usr/local/bin/heroku

source /etc/environment && export PATH