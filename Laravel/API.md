https://github.com/joselfonseca/laravel-api

composer install --ignore-platform-reqs
php artisan migrate
php artisan passport:install
php artisan db:seed