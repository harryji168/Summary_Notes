https://hub.docker.com/r/bitnami/magento



https://www.magemodule.com/all-things-magento/magento-2-tutorials/docker-magento-2-development/


    phpmyadmin:
        container_name: phpmyadmin
        restart: always
        image: phpmyadmin/phpmyadmin:latest
        environment:
          - MYSQL_ROOT_PASSWORD=root
          - PMA_USER=root
          - PMA_PASSWORD=root
        ports:
          - "8080:80"
        links:
          - mysql:db
        depends_on:
          - mysql