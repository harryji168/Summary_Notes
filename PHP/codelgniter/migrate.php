Docs: https://codeigniter.com/userguide3/libraries/migration.html

https://www.tech-prastish.com/blog/how-to-use-migrations-in-codeigniter-3/

php index.php migrate


https://stackoverflow.com/questions/33612956/codeigniter-fatal-error-call-to-undefined-function-mysqli-init

extension=php_mysqli.dll

sudo systemctl restart apache2

20220226104701_pet_types.php
20121031104401

mysql -u harry -p
CREATE USER 'harry'@'localhost' IDENTIFIED BY 'Password123#@!';


CREATE TABLE `pet_types` (
        `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
        `pet_type_name` VARCHAR(10) NOT NULL,
        `description` TEXT NULL,
        CONSTRAINT `pk_pet_types` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;

https://www.tutorialspoint.com/mysql/mysql-select-database.htm
use db_ci_ng;

CREATE DATABASE db_ci_ng DEFAULT CHARACTER SET = 'utf8mb4';
CREATE DATABASE API_Controller DEFAULT CHARACTER SET = 'utf8mb4';

CREATE DATABASE `Items-Inventory` DEFAULT CHARACTER SET = 'utf8mb4';

SHOW TABLES;
Drop TABLE `pet_types`;

INSERT INTO pet_type VALUES ("1", "Dog");