https://hackprogramming.com/2-ways-to-permanently-set-path-variable-in-ubuntu/



$ echo $PATHBashCopy
And you'll get the result something like this which is a list of directories separated by colon:

/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/gamesBashCopy
Now here comes the important part to make your terminal programs executable without writing full path.

1. Exporting PATH variable to /etc/environment
One of the fastest way to permanently add directory to $PATH environment variable is by using the following command:

# first append the new directory to path
$ PATH = /usr/local/sbin:/usr/local/bin:/pathToMyDirectory
$ source /etc/environment && export PATHBashCopy
2. Using ~/.profile file
Another way is use the .profile file by adding the export command and then run the source command:

# add this command to `~/.profile` file
$ export PATH=$PATH:/myNewDir
# then run the source command
$ source ~/.profile