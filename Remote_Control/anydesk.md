# anydesk is 

https://anydesk.com/en/downloads/linux


https://computingforgeeks.com/how-to-install-anydesk-on-ubuntu/

### Step 1: Update Ubuntu System
Start by ensuring your system is updated.

sudo apt update
sudo apt -y upgrade

### Step 2: Add AnyDesk repository

wget -qO - https://keys.anydesk.com/repos/DEB-GPG-KEY | sudo apt-key add -
Then add AnyDesk repository content to your Ubuntu system.

echo "deb http://deb.anydesk.com/ all main" | sudo tee /etc/apt/sources.list.d/anydesk-stable.list
### Step 3: Install AnyDesk on Ubuntu 20.04/18.04 LTS

sudo apt update
sudo apt install anydesk


### Step 4: Launch AnyDesk on Ubuntu 20.04/18.04
After installation, use the Desktop Applications launcher to start AnyDesk on Ubuntu 20.04/18.04 LTS.

$ anydesk
Enter AnyDesk Address of remote server or share yours for a remote user to connect to your machine. 




http://deb.anydesk.com/howto.html

AnyDesk DEB repository how-to
Run the following commands as root user:

- add repository key to Trusted software providers list

wget -qO - https://keys.anydesk.com/repos/DEB-GPG-KEY | apt-key add -
- add the repository:

echo "deb http://deb.anydesk.com/ all main" > /etc/apt/sources.list.d/anydesk-stable.list
- update apt cache:

apt update
- install anydesk:

apt install anydesksh 