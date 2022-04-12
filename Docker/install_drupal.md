https://hub.docker.com/r/bitnami/drupal

$ curl -sSL https://raw.githubusercontent.com/bitnami/bitnami-docker-drupal/master/docker-compose.yml > docker-compose.yml
$ docker-compose up -d



https://www.digitalocean.com/community/tutorials/how-to-install-drupal-with-docker-compose


version: "3"

services:
  mysql:
    image: mysql:8.0
    container_name: mysql
    command: --default-authentication-plugin=mysql_native_password
    restart: unless-stopped
    env_file: .env
    volumes:
      - db-data:/var/lib/mysql
    networks:
      - internal
  
  drupal:
    image: drupal:8.7.8-fpm-alpine
    container_name: drupal
    depends_on:
      - mysql
    restart: unless-stopped
    networks:
      - internal
      - external
    volumes:
      - drupal-data:/var/www/html
  
  webserver:
    image: nginx:1.17.4-alpine
    container_name: webserver
    depends_on:
      - drupal
    restart: unless-stopped
    ports:
      - 80:80
      - 443:443
    volumes:
      - drupal-data:/var/www/html
      - ./nginx-conf:/etc/nginx/conf.d
      - certbot-etc:/etc/letsencrypt
    networks:
      - external
  
  certbot:
    depends_on:
      - webserver
    image: certbot/certbot
    container_name: certbot
    volumes:
      - certbot-etc:/etc/letsencrypt
      - drupal-data:/var/www/html
    command: certonly --webroot --webroot-path=/var/www/html --email sammy@your_domain --agree-tos --no-eff-email --force-renewal -d your_domain -d www.your_domain

networks:
  external:
    driver: bridge
  internal:
    driver: bridge

volumes:
  drupal-data:
  db-data:
  certbot-etc:



  docker-compose up -d --force-recreate --no-deps webserver