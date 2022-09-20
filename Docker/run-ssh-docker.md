After building is complete connect to the app service via ssh using docker-compose exec app bash command. Now all the further commands will be executed inside app container (Debian Linux)
docker-compose exec app bash


docker ps

docker exec -it capiche-core_database_1 /bin/bash


docker exec -it capiche-guidance_capiche-guidance_1 /bin/bash