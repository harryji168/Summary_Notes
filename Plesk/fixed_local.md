 6  exit
    7  sh <(curl https://autoinstall.plesk.com/one-click-installer || wget -O - https://autoinstall.plesk.com/one-click-installer)
    8  sh <(curl https://autoinstall.plesk.com/plesk-installer || wget -O - https://autoinstall.plesk.com/plesk-installer)
    9  vi /var/log
   10  vi /var/log/kern.log
   11  sudo apt remove awesomeproject
   12  ls -la /etc/apt/sources.list.d
   13  apt-get update
   14  cat /etc/os-release
   15  cat /etc/apt/sources.list
   16  vim /etc/apt/sources.list
   17  nano /etc/apt/sources.list
   18  apt update
   19  apt-get clean
   20  apt update
   21  cd /etc/apt/sources.list.d
   22  mv anydesk-stable.list anydesk-stable.list.back
   23  apt-get clean
   24  apt update
   25  sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt $(lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
   26  wget --quiet -O - https://www.postgresql.org/media/keys/ACCC4CF8.asc | sudo apt-key add -
   27  apt-get update
   28  sh <(curl https://autoinstall.plesk.com/one-click-installer || wget -O - https://autoinstall.plesk.com/one-click-installer)