https://ostechnix.com/how-to-switch-between-multiple-php-versions-in-ubuntu/

$ sudo update-alternatives --config php

sudo systemctl restart apache2

/etc/php/7.4/apache2/php.ini



https://www.rosehosting.com/blog/how-to-install-php-7-4-with-nginx-on-ubuntu-20-04/
 

https://www.cloudbooklet.com/install-php-7-4-on-ubuntu/


$ git clone https://github.com/Bikranshu/lumen-react.git
 $ cd lumen-react
 $ composer install
 $ npm install
 $ cp .env.example .env (edit it with your database information)
 $ php artisan jwt:secret
 $ php artisan migrate
 $ php artisan db:seed
 $ php -S localhost:8000 -t public/
 $ npm run watch