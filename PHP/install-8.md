https://linuxize.com/post/how-to-install-php-8-on-ubuntu-20-04/

sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php


https://nextgentips.com/2021/12/03/how-to-install-php-8-1-on-ubuntu-21-04/


# How to Install PHP and PHP-FPM with NGINX
https://www.linode.com/docs/guides/install-php-8-for-apache-and-nginx-on-ubuntu/
 sudo apt install php-fpm

  sudo apt install php-common php-mysql php-cgi php-mbstring php-curl php-gd php-xml   php-pear

  Confirm the php-fpm service is running.

 sudo systemctl status php8.0-fpm
php8.0-fpm.service - The PHP 8.0 FastCGI Process Manager
     Loaded: loaded (/lib/systemd/system/php8.0-fpm.service; enabled; vendor pr>
     Active: active (running) since Thu 2021-07-29 14:16:36 UTC; 1min 18s ago
Add the following configuration to the virtual host .conf file for your domain. If a virtual host has not been configured, add it to the default NGINX file instead. These files are located in the /etc/nginx/sites-available directory.

Note
For more information on configuring a virtual host on NGINX, consult the Linode Guide on How to Install and Use NGINX on Ubuntu 20.04.

File: /etc/nginx/sites-available/default
1
2
3
4
5
6
7
8
9
server {
...
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
        }
...
}
    
Run the NGINX syntax test to verify the new configuration is correct.

 sudo nginx -t
Restart the NGINX service to apply all changes.

 sudo systemctl restart nginx