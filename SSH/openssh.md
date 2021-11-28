
<<<<<<< HEAD
nstallation
=======
installation
>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
Installation of the OpenSSH client and server applications is simple. To install the OpenSSH client applications on your Ubuntu system, use this command at a terminal prompt:

sudo apt install openssh-client
To install the OpenSSH server application, and related support files, use this command at a terminal prompt:

sudo apt install openssh-server


https://ubuntu.com/server/docs/service-openssh


# Permissions 0777 for '/Users/username/.ssh/id_rsa' are too open.
It is recommended that your private key files are NOT accessible by others.
This private key will be ignored.

https://stackoverflow.com/questions/9270734/ssh-permissions-are-too-open-error

```
chmod 400 ~/.ssh/id_rsa
```

If Keys need to be read-writable by you:

chmod 600 ~/.ssh/id_rsa