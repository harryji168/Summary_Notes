https://github.com/dixonsatit/lemp-docker-tutorial

sudo docker-compose up


https://github.com/rmuch/docker-php-hello-world

docker build -t docker-php-hello-world .


docker build -t my-php-app .


sudo docker build -t docker-ci-angular-project .

Successfully built bec168d56947
Successfully tagged docker-ci-angular-project:latest

sudo docker run -it --rm -p 88:80  --name running-project-app docker-ci-angular-project
docker stop $(docker ps -a -q)

docker run -d -p 88:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.4-apache 