# install with password

sudo apt install mysql-server
sudo mysql_secure_installation
sudo mysql -u root

# stop server
```
sudo systemctl stop mysql

sudo apt purge mysql-server mysql-client mysql-common mysql-server-core-* mysql-client-core-*

```

# reset root password
https://stackoverflow.com/questions/24566453/resetting-mysql-root-password-with-xampp-on-localhost#:~:text=Follow%20the%20following%20steps%3A,blank%20so%20just%20press%20enter




https://www.digitalocean.com/community/questions/completely-uninstall-mysql-server

# uninstall

sudo apt remove --purge mysql-server
sudo apt purge mysql-server
sudo apt autoremove
sudo apt autoclean
sudo apt remove dbconfig-mysql


 sudo mysql 
 CREATE USER 'harry'@'localhost' IDENTIFIED BY 'password';
CREATE USER 'harry'@'localhost' IDENTIFIED BY 'Password123#@!';

GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'harry'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
exit

mysql -u harry -p

Drop DATABASE laravel
CREATE DATABASE laravel DEFAULT CHARACTER SET = 'utf8mb4';

quit
https://github.com/joselfonseca/laravel-api