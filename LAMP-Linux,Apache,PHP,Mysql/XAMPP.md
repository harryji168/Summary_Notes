# What is XAMPP?  XAMPP (Windows, Mac OS X, Linux, Solaris)
XAMPP is the most popular PHP development environment

https://www.apachefriends.org/download.html

Change the permissions to the installer
```
chmod 755 xampp-linux-x64-7.4.25-0-installer.run 
```
 

Run the installer

```
sudo ./xampp-linux-x64-7.4.25-0-installer.run
```


![Screenshot from 2021-10-15 12-28-21](https://user-images.githubusercontent.com/21187699/137543285-4eea41fa-512e-4c91-9c06-8036d82a4621.png)
)

if 3306 port use just uninstall mysql

config apache web server port to 168

 




https://www.apachefriends.org/faq_linux.html

To start XAMPP simply call this command:
```sh
sudo /opt/lampp/lampp start
```
open xampp control panel
```
sudo /opt/lampp/manager-linux-x64.run
```

phpmyadmin
```browser
http://localhost:168/phpmyadmin/
```
```
http://localhost:168/dashboard/
```

###### other 


```install mysql
sudo apt install mysql-client-core-8.0
```
mysql

change root password
Now type the following query in the textarea and click Go
```
UPDATE mysql.user SET Password=PASSWORD('password') WHERE User='root'; FLUSH PRIVILEGES;
```


apache root path
```
cd /opt/lampp/htdocs
```



# uninstall Remove Xampp from Linux (Ubuntu)

>sudo /opt/lampp/uninstall
Alternatively > sudo -i cd /opt/lampp ./uninstall
> sudo rm -r /opt/lampp


# ProFTPD 

ProFTPD (short for Pro FTP daemon) is an FTP server. ProFTPD is Free and open-source software, compatible with Unix-like systems and Microsoft Windows (via Cygwin). Along with vsftpd and Pure-FTPd, ProFTPD is among the most popular FTP servers in Unix-like environments today. Compared to those, which focus e.g. on simplicity, speed or security, ProFTPD's primary design goal is to be a highly feature rich FTP server, exposing a large amount of configuration options to the user



# auto restart ==> make system stuck


Run the following command.

sudo gedit /etc/systemd/system/xampp.service
This command, if already not created, creates a new file named  xampp.service  in the directory  /etc/systemd/system/  and opens it for editing.

In the opened file, add the following lines and save the file

[Unit]
Description=XAMPP

[Service]
ExecStart=/opt/lampp/lampp start
ExecStop=/opt/lampp/lampp stop
Type=forking

[Install]
WantedBy=multi-user.target
Once the script file is created, run the following command to instruct Ubuntu to execute it at the startup.

sudo systemctl enable xampp.service


https://shareablecode.com/snippets/how-to-auto-start-xampp-at-startup-in-ubuntu-x42e-2uBd


disable
```
sudo systemctl disable xampp.service
```


https://www.apachefriends.org/index.html


>default is php 8.0 xampp-linux-x64-8.0.12-0-installer.run