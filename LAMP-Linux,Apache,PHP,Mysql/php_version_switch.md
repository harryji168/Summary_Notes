https://vitux.com/how-to-install-php5-php8-on-ubuntu/

# switch
sudo update-alternatives --config php


# remove 
$ sudo apt-get purge php7.*
$ sudo apt-get autoclean
$ sudo apt-get autoremove

https://ostechnix.com/how-to-switch-between-multiple-php-versions-in-ubuntu/


1.1. Switch from PHP 7.x to PHP 5.x
1.1.1 First disable PHP 7.2 module using command:

$ sudo a2dismod php7.2
Sample output:

Module php7.2 disabled.
To activate the new configuration, you need to run:
systemctl restart apache2
1.1.2. Next, enable PHP 5.6 module:

$ sudo a2enmod php5.6
1.1.3 Set PHP 5.6 as default version using command:

$ sudo update-alternatives --set php /usr/bin/php5.6
$ sudo update-alternatives --config php
$ sudo update-alternatives --set phar /usr/bin/phar5.6
$ sudo systemctl restart apache2
$ php -v