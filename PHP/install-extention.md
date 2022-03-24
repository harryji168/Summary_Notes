https://stackoverflow.com/questions/44718896/how-to-install-php-gd-in-ubuntu

sudo apt-get update
For 5.6 PHP

sudo apt-get install php5.6-gd
For 7.0 PHP

sudo apt-get install php7.0-gd
For 8.0 PHP

sudo apt-get install php8.0-gd


Step 3: Now, install CURL.
$ sudo apt install curl


# install  php7.0-gd

php 7:

sudo apt-get install php7.0-zip
php 5:

sudo apt-get install php5-zip




sudo service apache2 restart


###  

Then type the following command to install this module using the apt command or apt-get command:
$ sudo apt-get install php5-gd # older ubuntu

For PHP 7.x/8.x:
$ sudo apt-get install php-gd
/etc/init.d/apache2 restart

php -i | grep -i --color gd