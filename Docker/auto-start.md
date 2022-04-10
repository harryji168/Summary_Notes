
https://stackoverflow.com/questions/43671482/how-to-run-docker-compose-up-d-at-system-start-up

170

If your docker.service enabled on system startup

$ sudo systemctl enable docker
and your services in your docker-compose.yml has

restart: always
all of the services run when you reboot your system if you run below command only once

docker-compose up -d