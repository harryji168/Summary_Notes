https://tecadmin.net/docker-compose-for-mysql-with-phpmyadmin/  
  
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    container_name: pma
    links:
      - database
    environment:
      PMA_HOST: database
      PMA_PORT: 3306
      PMA_ARBITRARY: 1
    restart: always
    ports:
      - 8081:80