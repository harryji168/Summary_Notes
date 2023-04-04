https://www.vultr.com/docs/install-apache-subversion-on-ubuntu-20-04/


Install Apache Subversion on Ubuntu 20.04
Author: Thomas Rakwach

Last Updated: Wed, Aug 11, 2021 
Programming
Ubuntu
Introduction
Apache Subversion (SVN) is an open-source software version control system released under the Apache License. Software developers use SVN to manage and track changes to code and assets across projects. It supports several protocols for network access such as SVN, SVN+SSH, HTTP, and HTTPS. In this article, you will learn how to install Subversion on Ubuntu 20.04.

Prerequisites
Deploy a fully updated Vultr Ubuntu 20.04 server.
Create a non-root user with sudo access.
1. Install Apache2
Install Apache HTTP Web server.

$ sudo apt update

$ sudo apt install apache2 apache2-utils -y
Start the Apache service.

$ sudo systemctl start apache2
Enable the service to start on system boot.

$ sudo systemctl enable apache2
2. Install Apache Subversion
Install all required dependencies.

$ sudo apt-get install libapache2-mod-svn subversion-tools libsvn-dev -y
You will get a prompt, select Internet Site default option.

Install Subversion.

$ sudo apt install subversion -y
Enable Apache modules to run SVN.

$ sudo a2enmod dav

$ sudo a2enmod dav_svn
Restart the Apache service.

$ sudo systemctl restart apache2
3. Configure Apache2 for SVN
Edit the SVN apache configuration file.

$ sudo nano /etc/apache2/mods-enabled/dav_svn.conf
The final file should look like the below lines. Close and save the file.

Alias /svn /var/www/svn
<Location /svn>

    DAV svn
    SVNParentPath /var/www/svn

    AuthType Basic
    AuthName "Subversion Repository"
    AuthUserFile /etc/apache2/dav_svn.passwd
    Require valid-user

</Location>
Create project repositories.

$ sudo mkdir /var/www/svn

$ sudo svnadmin create /var/www/svn/project
Change repository permissions.

$ sudo chown -R www-data:www-data /var/www/svn

$ sudo chmod -R 775 /var/www/svn
4. Create SVN Admin Accounts
Create a new SVN user admin.

$ sudo htpasswd -cm /etc/apache2/dav_svn.passwd admin
Restart Apache server.

$ sudo systemctl restart apache2
To access the web interface, open your browser and go to the URL http://server_IP/svn/project. For example:

http://192.0.2.10/svn/project
Conclusion
You have successfully installed Apache Subversion on your server. To log in to the prompt, use admin as your username with the password you set during account creation. You can now configure SVN to version your projects.

More Information
For more information on Apache Subversion, please see the official documentation.