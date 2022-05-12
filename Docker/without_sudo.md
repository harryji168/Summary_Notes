https://askubuntu.com/questions/477551/how-can-i-use-docker-without-sudo


Add the docker group if it doesn't already exist:

 sudo groupadd docker
Add the connected user "$USER" to the docker group. Change the user name to match your preferred user if you do not want to use your current user:

 sudo gpasswd -a $USER docker

  sudo gpasswd -a harryji docker
Either do a newgrp docker or log out/in to activate the changes to groups.

You can use

 docker run hello-world


 3. Restart the docker daemon
$ sudo service docker restart


https://github.com/sindresorhus/guides/blob/main/docker-without-sudo.md


# sudo chmod 666 /var/run/docker.sock