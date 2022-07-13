https://www.cloudsavvyit.com/10528/how-to-use-docker-to-containerise-php-and-apache/

Creating a Dockerfile
Docker images are created from a Dockerfile. This file contains instructions which are used to build the image. Instructions include COPY, to copy files and folders into the container, and RUN, which runs a command within the container.

You can get a simple PHP site running by simply copying its files into an image based on php:8.0-apache.

FROM php:8.0-apache
WORKDIR /var/www/html

COPY index.php index.php
COPY src/ src
EXPOSE 80



