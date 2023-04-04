# auto startup firefox

Startup Applications
You can configure what applications should be started at login, in addition to the default startup applications configured on the system.

Open Startup Applications via the Activities overview. Alternatively you can press Alt+F2 and run the gnome-session-properties command.

Click Add and enter the command to be executed at login (name and comment are optional). For example, to make Firefox start automatically, it's sufficient to type firefox in the Command field and confirm with Add.

You can either type the command, or click the Browse... button and select a command. Applications to autostart are typically located in the /usr/bin folder.



https://help.ubuntu.com/stable/ubuntu-help/startup-applications.html.en#:~:text=Alternatively%20you%20can%20press%20Alt,field%20and%20confirm%20with%20Add.


# How to autostart applications on Ubuntu 20.04 Focal Fossa Linux


The objective of this article is to show the reader how to auto-start applications after user login on Ubuntu 20.04 Focal Fossa Linux GNOME desktop.

In this tutorial you will learn:

How to automatically start application after user login

How to autostart applications on Ubuntu 20.04 Focal Fossa Linux
How to autostart applications on Ubuntu 20.04 Focal Fossa Linux
Software Requirements and Conventions Used
Software Requirements and Linux Command Line Conventions
Category	Requirements, Conventions or Software Version Used
System	Installed Ubuntu 20.04 or upgraded Ubuntu 20.04 Focal Fossa
Software	N/A
Other	Privileged access to your Linux system as root or via the sudo command.
Conventions	# – requires given linux commands to be executed with root privileges either directly as a root user or by use of sudo command
$ – requires given linux commands to be executed as a regular non-privileged user
How to autostart applications on Ubuntu 20.04 step by step instructions


 
```
sudo vmhgfs-fuse .host:/ /mnt/ -o allow_other -o uid=1000  
```