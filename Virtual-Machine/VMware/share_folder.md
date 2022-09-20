# share_folder
https://balaidm.wordpress.com/2020/05/02/shared-folder-not-visible-in-ubuntu-on-vmware-workstation/

I can see the share directory in listed by running command 

```
vmware-hgfsclient *
```

So directory is shared but not mounted. Run below command to get it mounted to /mnt/hgfs
 
```
sudo vmhgfs-fuse .host:/ /mnt/ -o allow_other -o uid=1000  
```

![Screenshot from 2021-10-28 10-19-44](https://user-images.githubusercontent.com/21187699/139304261-240b5c47-aa97-4b00-8080-68a323ad3b1d.png)


https://askubuntu.com/questions/29284/how-do-i-mount-shared-folders-in-ubuntu-using-vmware-tools


# look like make vmware stuck, have kill it 