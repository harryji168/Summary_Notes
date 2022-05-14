# Install pgAdmin
1. sudo apt-get install curl ca-certificates gnupg 

2.
sudo apt-get install build-essential libssl-dev libffi-dev libgmp3-dev
sudo apt-get install python3-virtualenv libpq-dev python3-dev

3. sudo sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
4. sudo apt-get update
5. sudo apt-get install pgadmin4



https://askubuntu.com/questions/1230350/cant-install-pgadmin-4-on-20-04-lts


### wrong 
https://tecadmin.net/how-to-install-postgresql-in-ubuntu-20-04/

First, import the repository signing GPG key and add the pgAdmin4 PPA to your system using the following commands.

```
curl https://www.pgadmin.org/static/packages_pgadmin_org.pub | sudo apt-key add -

sudo sh -c 'echo "deb https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/focal pgadmin4 main" > /etc/apt/sources.list.d/pgadmin4.list' 

```
After adding the PPA, update the Apt cache and install the pgAdmin4 package on your system.

sudo apt update
sudo apt install pgadmin4 
The pgadmin4 package contains both pgadmin4-web and pgadmin4-desktop versions, Here:

pgadmin4-web – Provides the web interface accessible in a web browser
pgadmin4-desktop – Provides desktop application for Ubuntu system, which required Ubuntu Desktop system.
You can install both or one of them of your choice. If you have installed both or pgadmin4-web, run the below command to configure it. This will add a login screen to the pgAdmin4 web dashboard.

sudo /usr/pgadmin4/bin/setup-web.sh 
The above script will prompt you to create a user to access the web interface. Input an email address and password when prompted. Say “y” for other confirmation asked by the script.

Once the script finished, you are good to access the pgAdmin web dashboard. It will be available at the below address:

Access this in a web browser: http://localhost/pgadmin4

Login to pgAdmin3 web

In any case, the above page is not loading, restart the Apache server using “sudo systemctl restart apache2“. Again try to load the above URL

Now login with the email address and password configured with /usr/pgadmin4/bin/setup-web.sh script. After successful login to pgAdmin4, you will see the below screen.

Add server to pgAdmin4

Here you need to add your Postgres server to pgAdmin4. Click on the “Add New Server” button. This will open a popup, Enter a friendly name, database host, and Postgres login credentials.

Click “Save” to complete the connection.

On successful authentication, you will see the databases in the sidebar as shown below screenshot.

pgAdmin4 connected to database server

All done. You have successfully added the Postgres database server to pgAdmin4. You can also add more database instances to a single pgAdmin4 server.