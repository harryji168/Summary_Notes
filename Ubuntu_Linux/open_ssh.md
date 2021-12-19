https://linuxize.com/post/how-to-enable-ssh-on-ubuntu-20-04/



Enabling SSH on Ubuntu
By default, when Ubuntu is first installed, remote access via SSH is not allowed. Enabling SSH on Ubuntu is fairly straightforward.

Perform the following steps as root or user with sudo privileges to install and enable SSH on your Ubuntu system:

Open the terminal with Ctrl+Alt+T and install the openssh-server package:

sudo apt update
sudo apt install openssh-server
CopyCopy
When prompted, enter your password and press Enter to continue with the installation.

ubuntu install ssh
Once the installation is complete, the SSH service will start automatically. You can verify that SSH is running by typing:

sudo systemctl status ssh
Copy
The output should tell you that the service is running and enabled to start on system boot:

● ssh.service - OpenBSD Secure Shell server
    Loaded: loaded (/lib/systemd/system/ssh.service; enabled; vendor preset: enabled)
    Active: active (running) since Mon 2020-06-01 12:34:00 CEST; 9h ago
...
Copy
Press q to get back to the command line prompt.

Ubuntu ships with a firewall configuration tool called UFW. If the firewall is enabled on your system, make sure to open the SSH port:

sudo ufw allow ssh
Copy
That’s it! You can now connect to your Ubuntu system via SSH from any remote machine. Linux and macOS systems have SSH clients installed by default. To connect from a Windows machine, use an SSH client such as PuTTY .

Connecting to the SSH Server
To connect to your Ubuntu machine over LAN invoke the ssh command followed by the username and the IP address in the following format:


ssh username@ip_address
Copy
Make sure you change username with the actual user name and ip_address with the IP Address of the Ubuntu machine where you installed SSH.
If you don’t know your IP address you can easily find it using the ip command :

ip a
Copy
ubuntu find ip address
As you can see from the output, the system IP address is 10.0.2.15.

Once you’ve found the IP address, log in to remote machine by running the following ssh command:

ssh linuxize@10.0.2.15
Copy
When you connect the first time, you will see a message like this:

The authenticity of host '10.0.2.15 (10.0.2.15)' can't be established.
ECDSA key fingerprint is SHA256:Vybt22mVXuNuB5unE++yowF7lgA/9/2bLSiO3qmYWBY.
Are you sure you want to continue connecting (yes/no)?
Copy
Type yes and you’ll be prompted to enter your password.

Warning: Permanently added '10.0.2.15' (ECDSA) to the list of known hosts.
linuxize@10.0.2.15's password:
Copy
Once you enter the password, you will be greeted with the default Ubuntu message:


Welcome to Ubuntu 20.04 LTS (GNU/Linux 5.4.0-26-generic x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage
...
Copy
You are now logged in to your Ubuntu machine.




# sudo ufw allow ssh


# hhttps://www.tecmint.com/fix-ssh-too-many-authentication-failures-error/


$ vim ~/.ssh/config
Add the following configuration in the file, under the Host * section as shown in the screesnhot.

Host * 
       	IdentitiesOnly=yes


ssh harryji@127.0.0.1

ssh port 22 
set firewall

Your Public IPv4 is: 107.190.28.28

http://192.168.1.1/ui/1.0.1.2038/dynamic/password-reset.html
harry@superesolutions.com
Wuzui168387_

