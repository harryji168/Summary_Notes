https://adevait.com/laravel/using-laravel-with-react-js


PHP Fatal error:  Uncaught Error: Failed opening required '/home/harryji/test/guide-to-laravel-and-react/vendor/autoload.php' (include_path='.:/usr/share/php') in /home/harryji/test/guide-to-laravel-and-react/artisan:18

run 
composer install

then 
run php artisan serve



## https://blog.pusher.com/react-laravel-application/


    $ cd tasksman
#####    $ php artisan preset react


### https://exerror.com/solved-root-composer-json-requires-php-7-3-but-your-php-version-8-0-0-does-not-satisfy-that-requirement-in-laravel/
Problem 1
    - Root composer.json requires php ^7.1.3 but your php version (8.0.14) does not satisfy that requirement.


     "php": "^7.1.3 | ^8.0 ",
  
or 

composer install --ignore-platform-reqs


### https://stackoverflow.com/questions/67949669/reflectionparametergetclass-method-deprecated-in-php-8-0-1


because ReflectionParameter::getClass() is deprecated in php 8 .

solution go to

vendor\laravel\framework\src\Illuminate\Container\Container.php
and go to

protected function resolvePrimitive(ReflectionParameter $parameter)

and replace

$parameter->getClass()** with **$parameter->getType()->getName() .


### https://developer.okta.com/blog/2018/12/06/crud-app-laravel-react
https://github.com/oktadev/okta-php-trivia-react
mysql -uharry -p
CREATE DATABASE trivia CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL on trivia.* to trivia@127.0.0.1 identified by 'trivia';
quit


composer install --ignore-platform-reqs
php artisan key:generate
php artisan migrate
php artisan serve


### https://github.com/moeen-basra/laravel-react

mysql -u harry -p


CREATE DATABASE laravel DEFAULT CHARACTER SET = 'utf8mb4';


check react 
npm view react version
17.0.2

check Laravel

php artisan --version
Laravel Framework 8.80.0


# https://github.com/cinovic-llp/laravel-react-starterkit

mysql -u harry -p

Drop DATABASE laravel;
CREATE DATABASE laravel DEFAULT CHARACTER SET = 'utf8mb4';

quit

git clone
create a .env file copy content from .env.example and update the values
composer install
npm install
npm run dev for react build
php artisan db:seed
php artisan serve


## https://github.com/DnD-Montreal/session-tome

cp .env.example .env 

cp .env.example .env
composer install
php artisan key:generate
yarn install
yarn dev
# To install backpack fully you must publish the front-end assets
php artisan vendor:publish --provider="Backpack\CRUD\BackpackServiceProvider" --tag=public