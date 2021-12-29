https://phoenixnap.com/kb/install-jenkins-ubuntu

sudo systemctl status jenkins


Step 4: Modify Firewall to Allow Jenkins
You need to open Port 8080 to allow Jenkins to communicate.

If you’re using the default UFW firewall, enter the following:

sudo ufw allow 8080

sudo ufw status

sudo ufw enable

http://127.0.0.1:8080/login?from=%2F

sudo cat /var/lib/jenkins/secrets/initialAdminPassword

c035f6932d204a288af72cc8c3a047c3