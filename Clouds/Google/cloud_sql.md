
https://www.youtube.com/watch?v=g1UE8Ns4ZJA
How to Use Google Cloud SQL


LAMP Stack
Solution provided by Google Click to Deploy

Site address
http://34.65.100.128/ 
Admin URL
http://34.65.100.128/phpmyadmin 
MySQL user
root
MySQL password (Temporary)
Pe6mFAvvC36nHs
Instance
lamp-1-vm
Instance zone
europe-west6-b
Instance machine type
e2-small

https://www.youtube.com/watch?v=g1UE8Ns4ZJA
How to Use Google Cloud SQL


terminal
ls
sudo su -
cd /
ls
cd /var/www/html
vim index.php
# need create database

<?php
$host = '34.67.189.246';
$db = 'owner-pet';
$user = 'owner-pet';
$password = 'Password123!';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}



<?php
$host = 'localhost';
$db = 'mysql';
$user = 'root';
$password = 'Pe6mFAvvC36nHs';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
