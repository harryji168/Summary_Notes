# ln (Unix)

ln -s ~/.local/lib/code-server-3.12.0/bin/code-server ~/.local/bin/code-server

The ln command is a standard Unix command utility used to create a hard link or a symbolic link (symlink) to an existing file or directory.[1] The use of a hard link allows multiple filenames to be associated with the same file since a hard link points to the inode of a given file, the data of which is stored on disk. On the other hand, symbolic links are special files that refer to other files by name.[2]

The ln command by default creates hard links, and when called with the command line parameter ln -s creates symbolic links.[3] Most operating systems prevent hard links to directories from being created since such a capability could disrupt the structure of a file system and interfere with the operation of other utilities.[4] The ln command can however be used to create symbolic links to non-existent files.[2]


# PATH Definition 

For example, to add the directory /usr/sbin, the following would be used:

PATH="/usr/sbin:$PATH"

PATH is an environmental variable in Linux and other Unix-like operating systems that tells the shell which directories to search for executable files (i.e., ready-to-run programs) in response to commands issued by a user. It increases both the convenience and the safety of such operating systems and is widely considered to be the single most important environmental variable.

Environmental variables are a class of variables (i.e., items whose values can be changed) that tell the shell how to behave as the user works at the command line (i.e., in a text-only mode) or with shell scripts (i.e., short programs written in a shell programming language). A shell is a program that provides the traditional, text-only user interface for Unix-like operating systems; its primary function is to read commands that are typed in at the command line and then execute (i.e., run) them.

http://www.linfo.org/path_env_var.html

# tee Command Syntax

The tee command reads from the standard input and writes to both standard output and one or more files at the same time. tee is mostly used in combination with other commands through piping.

In this article, we’ll cover the basics of using the tee command.

tee Command Syntax
The syntax for the tee command is as follows:

tee [OPTIONS] [FILE]
Copy
OPTIONS :
-a (--append) - Do not overwrite the files instead append to the given files.
-i (--ignore-interrupts) - Ignore interrupt signals.
Use tee --help to view all available options.
FILE_NAMES - One or more files. Each of which the output data is written to.
How to Use the tee Command


# Source Command Syntax 

https://linuxize.com/post/bash-source-command/


The source command reads and executes commands from the file specified as its argument in the current shell environment. It is useful to load functions, variables, and configuration files into shell scripts.

source is a shell built-in in Bash and other popular shells used in Linux and UNIX operating systems. Its behavior may be slightly different from shell to shell.

Source Command Syntax
The syntax for the source command is as follows:

source FILENAME [ARGUMENTS]
. FILENAME [ARGUMENTS]


# Usermod Command in Linux

usermod is a command-line utility that allows you to modify a user’s login information.

This article covers how to use the usermod command to add a user to a group, change a user shell, login name, home directory, and more.

usermod Command
The syntax of the usermod command takes the following form:

usermod [options] USER
Copy
Only root or users with sudo access can invoke usermod and modify a user account. On success, the command does not display any output.

Add a User to a Group

usermod -a -G GROUP USER

```
rvm reinstall ruby-3.0.0
```

```
rvm --default use ruby-3.0.0
```


 # systemctl

How to Start, Stop, and Restart Services in Linux

Linux provides fine-grained control over system services through systemd, using the systemctl command. Services can be turned on, turned off, restarted, reloaded, or even enabled or disabled at boot. If you are running Debian 7, CentOS 7, or Ubuntu 15.04 (or later), your system likely uses systemd.

This guide will show you how to use basic commands to start, stop, and restart services in Linux.