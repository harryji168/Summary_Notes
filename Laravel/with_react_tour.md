https://adevait.com/laravel/using-laravel-with-react-js


PHP Fatal error:  Uncaught Error: Failed opening required '/home/harryji/test/guide-to-laravel-and-react/vendor/autoload.php' (include_path='.:/usr/share/php') in /home/harryji/test/guide-to-laravel-and-react/artisan:18

run 
composer install

then 
run php artisan serve



## https://blog.pusher.com/react-laravel-application/


    $ cd tasksman
    $ php artisan preset react
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