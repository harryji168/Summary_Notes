# How To Install PostgreSQL on Ubuntu 20.04 [Quickstart]

```
sudo apt update
```
```
sudo apt install postgresql postgresql-contrib
```


check version
```shell
psql --version
```
get 


###
https://tableplus.com/blog/2018/10/how-to-create-superuser-in-postgresql.html

CREATE ROLE harry LOGIN SUPERUSER;


sudo service postgresql restart

##### 
https://medium.com/coding-blocks/creating-user-database-and-adding-access-on-postgresql-8bfcd2f4a91e

sudo -u postgres psql
postgres=# create database mydb;
postgres=# create user myuser with encrypted password 'mypass';
postgres=# grant all privileges on database mydb to myuser;




### missing 

psql (PostgreSQL) 12.8 (Ubuntu 12.8-0ubuntu0.20.04.1)

https://www.digitalocean.com/community/tutorials/how-to-install-postgresql-on-ubuntu-20-04-quickstart

Step 2 — Using PostgreSQL Roles and Databases

sudo -i -u postgres
