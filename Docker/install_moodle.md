 https://hub.docker.com/r/bitnami/moodle
 
$ curl -sSL https://raw.githubusercontent.com/bitnami/bitnami-docker-moodle/master/docker-compose.yml > docker-compose.yml
$ docker-compose up -d


Step 2: Run the backup command
We need to mount two volumes in a container we will use to create the backup: a directory on your host to store the backup in, and the volumes from the container we just stopped so we can access the data.

$ docker run --rm -v /path/to/moodle-backups:/backups --volumes-from moodle busybox \
  cp -a /bitnami/moodle /backups/latest