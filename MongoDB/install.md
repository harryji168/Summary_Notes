https://docs.mongodb.com/manual/tutorial/install-mongodb-on-ubuntu/

sudo apt-get update


wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -


# Start MongoDB.

sudo systemctl start mongod


# Verify that MongoDB has started successfully.¶


harryji@distracted-khorana:~/TypeScript
$ sudo systemctl status mongod
● mongod.service - MongoDB Database Server
     Loaded: loaded (/lib/systemd/system/mongod.service; disabled; vendor preset: enabled)
     Active: active (running) since Mon 2021-12-27 19:43:53 PST; 11s ago
       Docs: https://docs.mongodb.org/manual
   Main PID: 60313 (mongod)
     Memory: 59.7M
     CGroup: /system.slice/mongod.service
             └─60313 /usr/bin/mongod --config /etc/mongod.conf

Dec 27 19:43:53 distracted-khorana.107-190-28-28.plesk.page systemd[1]: Started MongoDB Database Server.



use VSS extension