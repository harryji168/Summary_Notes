https://jhooq.com/docker-edit-file-inside-container/

. Find the container id of a running container
1. First, we need to find the CONTAINER ID of the running container. Use the following command to list all the running containers -

docker ps -a


03581f7c7e16 

2. Login inside the docker container using CONTAINER ID


docker exec -u 0 -it 03581f7c7e16 /bin/bash



https://stackoverflow.com/questions/20813486/exploring-docker-containers-file-system


# use vss extension
https://code.visualstudio.com/docs/remote/containers

Install the Remote Development extension pack.

remote-containers:open folders in container

/var/www/html/