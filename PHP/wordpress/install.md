https://ubuntu.com/tutorials/install-and-configure-wordpress#2-install-dependencies

sudo apt update
sudo apt install apache2 \
                 ghostscript \
                 libapache2-mod-php \
                 mysql-server \
                 php \
                 php-bcmath \
                 php-curl \
                 php-imagick \
                 php-intl \
                 php-json \
                 php-mbstring \
                 php-mysql \
                 php-xml \
                 php-zip


http://localhost:8080/wordpress/wp-admin/setup-config.php

wp-admin
admin
password

http://localhost:8080/wordpress/
http://localhost:8080/wordpress/wp-admin/


https://linuxhint.com/fix-nginx-403-forbidden/#:~:text=The%20very%20first%20and%20common,will%20return%20403%20forbidden%20error.

sudo chown -R www-data:www-data *

location / {
autoindex on;
autoindex_exact_size on;
}

sudo nginx -t

sudo systemctl restart nginx

test speed