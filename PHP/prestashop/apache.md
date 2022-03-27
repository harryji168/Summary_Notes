Enable the Apache mod_rewrite module

https://www.tutsmake.com/how-to-mod_rewrite-enable-in-apache-ubuntu-18-04/

Then you need to add this “AllowOverride All” in your VirtualHost configuration file like below

    <Directory /var/www/html>
    Options Indexes FollowSymLinks
    AllowOverride All
    </Directory>