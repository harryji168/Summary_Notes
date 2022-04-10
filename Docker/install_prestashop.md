docker pull prestashop/prestashop:1.7.8.5-apache

Status: Downloaded newer image for prestashop/prestashop:1.7.8.5-apache
docker.io/prestashop/prestashop:1.7.8.5-apache


docker run --rm -d  -p 98:80/tcp prestashop/prestashop:1.7.8.5-apache


https://stackoverflow.com/questions/20813486/exploring-docker-containers-file-system



https://www.thepylot.dev/install-prestashop-mysql-by-using-docker-containers/

docker-compose up -d

# docker-compose.yml

version: '3.9'

services:
    mysql:
        image: mysql:8
        container_name: prestashop-db
        command: --default-authentication-plugin=mysql_native_password
        environment:
            MYSQL_DATABASE: prestashop
            MYSQL_ROOT_PASSWORD: prestashop
        ports:
            - 3307:3306
        networks:
            - prestashop
        
    prestashop:
        image: prestashop/prestashop:1.7
        container_name: prestashop
        environment:
            DB_SERVER: mysql
        ports:
            - 8080:80
        networks:
            - prestashop

 

networks:
    prestashop:


https://stackoverflow.com/questions/20813486/exploring-docker-containers-file-system

database setting

datbase:prestashop-db
MYSQL_DATABASE: prestashop
username: root
MYSQL_ROOT_PASSWORD: prestashop

/var/www/html/