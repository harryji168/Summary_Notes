# Installing cURL for Ubuntu Linux

he procedure to install cURL on Ubuntu Linux is as follows:

Update your Ubuntu box, run: 
```
sudo apt update && sudo apt upgrade
```
Next, install cURL, execute: 
```
sudo apt install curl
```
Verify install of curl on Ubuntu by running: 
```
curl --version
```
Search for libcurl bindings for your programming needs: apt-cache search libcurl | grep python
Install the Python bindings to libcurl: sudo apt install python3-pycurl
Search for other curl bindings to libcurl: apt-cache search libcurl

# install Docker 
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04


sudo apt update
￼Copy
Next, install a few prerequisite packages which let apt use packages over HTTPS:

sudo apt install apt-transport-https ca-certificates curl software-properties-common
￼Copy
Then add the GPG key for the official Docker repository to your system:

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
￼Copy
Add the Docker repository to APT sources:

sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu focal stable"
￼Copy
This will also update our package database with the Docker packages from the newly added repo.

Make sure you are about to install from the Docker repo instead of the default Ubuntu repo:

apt-cache policy docker-ce
￼Copy


# Install Docker Compose

https://docs.docker.com/compose/install/

install Compose on Linux systems
On Linux, you can download the Docker Compose binary from the Compose repository release page on GitHub. Follow the instructions from the link, which involve running the curl command in your terminal to download the binaries. These step-by-step instructions are also included below.

For alpine, the following dependency packages are needed: py-pip, python3-dev, libffi-dev, openssl-dev, gcc, libc-dev, rust, cargo and make.

Run this command to download the current stable release of Docker Compose:

# sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

To install a different version of Compose, substitute 1.29.2 with the version of Compose you want to use.

If you have problems installing with curl, see Alternative Install Options tab above.

Apply executable permissions to the binary:

# sudo chmod +x /usr/local/bin/docker-compose

Note: If the command docker-compose fails after installation, check your path. You can also create a symbolic link to /usr/bin or any other directory in your path.

For example:

# sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

Optionally, install command completion for the bash and zsh shell.

Test the installation.

# docker-compose --version

docker-compose version 1.29.2, build 5becea4c


https://stackoverflow.com/questions/48957195/how-to-fix-docker-got-permission-denied-issue

if you want to run docker as non-root user then you need to add it to the docker group.

Create the docker group if it does not exist
# sudo groupadd docker
Add your user to the docker group.
# sudo usermod -aG docker $USER
Run the following command or Logout and login again and run (that doesn't work you may need to reboot your machine first)
# newgrp docker

Check if docker can be run without root
# docker run hello-world
Reboot if still got error

# reboot