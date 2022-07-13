https://www.youtube.com/watch?v=py6Km38tJBc


https://code.visualstudio.com/docs/remote/ssh-tutorial

 
 https://www.digitalocean.com/community/tutorials/how-to-use-visual-studio-code-for-remote-development-via-the-remote-ssh-plugin


https://portal.jvmhost.com/knowledgebase/article/228/how-to-access-shell-with-ssh-on-cpanel-server-from-linux-/

How to access shell with SSH on cPanel server from Linux?
Linux distros include SSH client software by default or it can be easily installed with

'apt-get install openssh-client' or 'yum install openssh-clients' depending on your package manager.
To access your shell with SSH from Linux perform the following steps:

1. Login to cPanel and go to Security > SSH/Shell Access to generate SSH key pair.
2. Click Manage SSH Keys > Generate a New Key. You should use a password to protect the key. You will be asked the password each time you use the key.
3. In Public Keys section click 'Manage Authorization' and 'Authorize'
4. In Private Keys section click Vew/Download then download the key (id_dsa or id_rsa) to your PC.
5. Save it to ~/.ssh directory on your linux machine under a meaningful name to not overwrite your existing keys for example id_dsa.myjavahost
6. Now make sure permissions are correct on the key (one time task) and connect (you will be prompted for the password you setup in step #2):
mypc:~$ chmod 600 .ssh/id_dsa.myjavahost
mypc:~$ ssh -p1033 -i .ssh/id_dsa.myjavahost yourusername@yourservername
Enter passphrase for key '.ssh/id_dsa.myjavahost':