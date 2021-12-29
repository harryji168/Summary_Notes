https://phoenixnap.com/kb/install-jenkins-ubuntu

sudo systemctl status jenkins


Step 4: Modify Firewall to Allow Jenkins
You need to open Port 8080 to allow Jenkins to communicate.

If you’re using the default UFW firewall, enter the following:

sudo ufw allow 8080

sudo ufw status