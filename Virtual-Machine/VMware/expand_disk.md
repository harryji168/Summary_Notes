# vmware expand disk encryption failed

1. have to remove encryption  first

2.in Virtual Machine setting do expend

3. power linux

From Ubuntu (in VM) install gparted by executing 

```sh
sudo apt-get install gparted 
```
in terminal
- Open 
```sh
sudo gparted
```
from terminal
- Rightclick on the swap partition, click "swapoff"
- Delete swap partition
- Extend your data partition, but leave enough space to create a new swap partition
- Recreate swap partition with about the same size as before, select linux-swap as file system
- Click that green tick in gparted to apply all operations. Then select "swapon" to enable swap again
