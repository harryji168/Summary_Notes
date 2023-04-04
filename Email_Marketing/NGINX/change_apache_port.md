https://ubiq.co/tech-blog/how-to-change-port-number-in-apache-in-ubuntu/

sudo vi /etc/apache2/ports.conf


sudo nano /etc/apache2/sites-available/your_domain.conf

$ sudo systemctl restart apache2 #SystemD
$ sudo service apache2 restart #SysVInit

change from 80 to 88
