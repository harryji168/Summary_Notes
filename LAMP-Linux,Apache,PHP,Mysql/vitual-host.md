https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-18-04

sudo mkdir /var/www/your_domain
Next, assign ownership of the directory with the $USER environment variable:

sudo chown -R $USER:$USER /var/www/your_domain
The permissions of your web roots should be correct if you haven’t modified your unmask value, but you can make sure by typing the following:

sudo chmod -R 755 /var/www/your_domain
Next, create a sample index.html page using nano or your favorite editor:

nano /var/www/your_domain/index.html