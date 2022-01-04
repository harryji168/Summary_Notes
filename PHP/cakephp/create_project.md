 

composer create-project --prefer-dist cakephp/app:~4.0 my_app_name



sudo mysql -u root
Create a database for CakePHP.

CREATE DATABASE myproject;
GRANT ALL ON myproject.* to 'myproject_user'@'localhost' IDENTIFIED BY 'StrongPassword';
FLUSH PRIVILEGES;
QUIT;
