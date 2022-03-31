http://www.facweb.iitkgp.ac.in/dashboard/docs/auto-start-xampp.html

Debian-like Distributions (Debian, Ubuntu, …​)
Copy the /opt/lampp/lampp script to the /etc/init.d directory.
```
sudo cp /opt/lampp/lampp /etc/init.d
```
Add or modify the following lines at the beginning of the /etc/init.d/lampp script.

### BEGIN INIT INFO
# Provides:          xampp
# Required-Start:    $remote_fs $syslog
# Required-Stop:     $remote_fs $syslog
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: Start XAMPP at boot time
# Description:       Enable services provided by XAMPP.
### END INIT INFO
Add the script to the default runlevels and enable it.

sudo update-rc.d -f lampp defaults
sudo update-rc.d -f lampp enable
Reboot your system and XAMPP should start automatically.

To revert the changes, use the commands below:

cd /etc/init.d
sudo update-rc.d -f lampp remove