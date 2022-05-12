curl -s https://laravel.build/laravel-app | bash


cd laravel-app 

./vendor/bin/sail up

curl -s "https://laravel.build/example-app?with=mysql,redis" | bash





# Installation Via Composer
If your computer already has PHP and Composer installed, you may create a new Laravel project by using Composer directly. After the application has been created, you may start Laravel's local development server using the Artisan CLI's serve command:

composer create-project laravel/laravel example-app

cd example-app

php artisan serve


composer install --ignore-platform-reqsy