https://www.postgresql.org/docs/9.0/sql-createdatabase.html 

```
createdb -e "auto-onborading"
```

 

create user harry with encrypted password '12345678';


##### 
https://medium.com/coding-blocks/creating-user-database-and-adding-access-on-postgresql-8bfcd2f4a91e

sudo -u postgres psql
postgres=# create database mydb;
postgres=# create user myuser with encrypted password 'mypass';
postgres=# grant all privileges on database mydb to myuser;


### createdb-database-creation-failed-error-permission-denied-to-create-database
https://stackoverflow.com/questions/43734650/createdb-database-creation-failed-error-permission-denied-to-create-database

sudo -u postgres psql
$ psql

postgres=# alter user athleticu createdb;
ALTER ROLE