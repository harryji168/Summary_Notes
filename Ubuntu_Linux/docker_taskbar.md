# Docker (software) 

Docker is a set of platform as a service (PaaS) products that use OS-level virtualization to deliver software in packages called containers.[6] Containers are isolated from one another and bundle their own software, libraries and configuration files; they can communicate with each other through well-defined channels.[7] Because all of the containers share the services of a single operating system kernel, they use fewer resources than virtual machines.[8]

The service has both free and premium tiers. The software that hosts the containers is called Docker Engine.[8] It was first started in 2013 and is developed by Docker, Inc.[9]

# Initial release	March 20, 2013; 8 years ago[1]


test
```
docker run hello-world
```



# ERROR: Couldn't connect to Docker daemon at http+docker://localhost - is it running?

If it's at a non-standard location, specify the URL with the DOCKER_HOST environment variable.


Manage Docker as a non-root user

The docker daemon binds to a Unix socket instead of a TCP port. By default that Unix socket is owned by the user root and other users can only access it using sudo. The docker daemon always runs as the root user.

If you don’t want to use sudo when you use the docker command, create a Unix group called docker and add users to it. When the docker daemon starts, it makes the ownership of the Unix socket read/writable by the docker group.

To create the docker group and add your user:

# 1. Create the docker group.
$ sudo groupadd docker

# 2. Add your user to the docker group.
$ sudo usermod -aG docker $USER

# 3. Log out and log back in so that your group membership is re-evaluated.

# 4. Verify that you can run docker commands without sudo.
$ docker run hello-world

https://stackoverflow.com/questions/29101043/cant-connect-to-docker-from-docker-compose
