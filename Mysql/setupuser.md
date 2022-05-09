Step 3: Create Database for Laravel Application
Next up, we will create a database for the Laravel application.

But first, we need to install a database server. Laravel supported database systems are MariaDB, MySQL, SQLite, Postgres, or SQL Server.

We will go with the MariaDB database engine.

#  sudo apt install mariadb-server
Once the database server is installed, log into the MariaDB prompt:

#  sudo  mysql -u root -p
Once logged in create the database, database user, and grant all privileges to the database user.
```
CREATE DATABASE laravel_db;
CREATE USER 'laravel_user'@'localhost' IDENTIFIED BY 'secretpassword';
GRANT ALL ON laravel_db.* TO 'laravel_user'@'localhost';
FLUSH PRIVILEGES;
QUIT;
```