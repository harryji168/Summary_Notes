
Solution 2: Add your user to the docker group
sudo usermod -aG docker harryji

newgrp docker

docker run hello-world


installInstalling Docker Compose


sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose

docker-compose --version