
https://stackoverflow.com/questions/43671482/how-to-run-docker-compose-up-d-at-system-start-up

cd ~/docker/prestashop && docker-compose up -d


crontab -e

@reboot (sleep 30s ; cd ~/docker/prestashop; /usr/local/bin/docker-compose up -d )&