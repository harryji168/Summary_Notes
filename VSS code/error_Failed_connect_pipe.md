# Recent win10 update: Failed to connect pipe to virtual machine: the system cannot find the file specified


I apologize for waking this thread from the dead, but I came across your thread while searching for solutions as well. I was able to get mine working finally so I thought I would share my solution. First I'll say what did not work was: uninstall/install, deleting all related VMware files, copying the VM's files to a different directory, resetting the settings in the Virtual Network. They all made no noticeable change.


# look like share foler make vmware stuck, have kill it 
 

The solution that finally worked for me was going to "add or remove programs" (aka Apps & Features) and clicking "modify" then selecting "repair" on both the (x64) and (x86) versions of my Microsoft Visual C++ 2015-2019 Redistributable ver. 14.24.28126.4 (specific version might not be important.)




https://communities.vmware.com/t5/VMware-Workstation-Player/Recent-win10-update-Failed-to-connect-pipe-to-virtual-machine/td-p/1871504