curl -s https://laravel.build/laravel-app | bash


cd laravel-app 

./vendor/bin/sail up

curl -s "https://laravel.build/example-app?with=mysql,redis" | bash