https://www.inmotionhosting.com/support/server/nginx/install-nginx-on-cpanel/


First, log into WHM as the root user.
Next, click the Tweak Settings link in the Server Configuration section.
On the Tweak Settings page click the “>” to scroll, then click the System tab when you see it.
Scroll down to the Apache non-SSL IP/port options and select the box to change ports. Since we want to set the listening ports to 8080 for InMotion servers, enter the following:

0.0.0.0:8080
Navigate to the Apache SSL port setting and select the box to change the ports. Since InMotion uses port 8443 enter the following:

0.0.0.0:8443
Scroll down to the bottom of the page and click the Save button to open the listening ports.
Installing NGINX
First, connect to your server as the root user via SSH.
Once logged in, run the following command:

yum -y install imh-ultrastack-ded
You will see the following message, type ‘y’, then press the enter key.

Install 1 Package
Total download size: 484 k
Installed size: 1.3 M
Is this ok [y/d/N]: y

The software has been installed successfully when you see a message such as this:

Installed:
imh-nginx.x86_64 0:1.13.3-2.el7
Complete!
Congratulations, you have now installed NGINX!

