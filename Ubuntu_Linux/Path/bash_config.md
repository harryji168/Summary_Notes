https://opensource.com/article/21/6/bash-config

# ~/.bashrc: User-specific aliases and functions

Starting Bash
Every Linux host that uses Bash—which is pretty much all of them since Bash is the default shell for all distributions—includes some excellent, built-in examples of sourcing.

Whenever a Bash shell starts, its environment must be configured so that it is usable. There are five main files and one directory that are used to configure the Bash environment. They are listed here along with their main functions:

/etc/profile: System-wide environment and startup programs
/etc/bashrc: System-wide functions and aliases
/etc/profile.d/: Directory that contains system-wide scripts for configuring various command-line tools such as vim and mc and any custom configuration scripts a sysadmin creates
~/.bash_profile: User-specific environment and startup programs
~/.bashrc: User-specific aliases and functions
~/.bash_logout: User-specific commands to execute when the user logs out
Try to trace the execution sequence through these files and determine which sequence it uses for a non-login Bash initialization versus a log-in Bash initialization. I did this in Chapter 17 of Volume 1 in my Linux training series, Using and administering Linux: Zero to sysadmin.

I'll give you one hint. It all starts with the ~/.bashrc script.