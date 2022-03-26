https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-20-04

sudo a2ensite your_domain.conf
Disable the default site defined in 000-default.conf:

sudo a2dissite 000-default.conf
Next, let’s test for configuration errors:

sudo apache2ctl configtest
You should receive the following output:

Output
Syntax OK
Restart Apache to implement your changes:

sudo systemctl restart apache2
Apache should now be serving your domain name. You can test this by navigating to



https://technowikis.com/40891/how-to-install-apache-on-ubuntu-21-04-hirsute-hippo

sudo apt update 