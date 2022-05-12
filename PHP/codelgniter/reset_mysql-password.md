sudo mysql --user=root mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root'; 

flush privileges; 

CREATE DATABASE local DEFAULT CHARACTER SET = 'utf8mb4'; 