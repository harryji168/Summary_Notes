# Installing cron
Most likely cron is installed on your system. But if suddenly this is not the case, you can fix it with the command:

apt install cron

Add it to autostart and run:

systemctl enable --now cron

Simple cron configuration
The easiest way to create a regular task using cron is to put the script in one of the following folders:

/etc/cron.hourly
/etc/cron.daily
/etc/cron.weekly
/etc/cron.monthly


Advanced cron configuration
To set up cron jobs, enter:

crontab -e

crontab -l





https://serverspace.io/support/help/automate-tasks-with-cron-ubuntu-20-04/

sudo chmod +x backup.sh

```
*/3 * * * * ~/Summary_Notes/private/backup.sh
```