https://docs.cpanel.net/knowledge-base/sql/install-or-update-postgresql-on-your-cpanel-server/

Run the /usr/local/cpanel/scripts/installpostgres command to install or upgrade PostgreSQL.

Access WHM’s Configure PostgreSQL interface (WHM >> Home >> SQL Services >> Configure PostgreSQL).

Click Install Config if PostgreSQL does not exist on your server.


Click Create Users to add current cPanel users to PostgreSQL.

Enter a new password in the Enter New Password text box.

Confirm your new password, and click Change Password.

Warning:
Only use letters and numbers. Non-alphanumeric characters can cause errors to occur.
Import your databases. To do this, run the following command:


### 
https://www.knownhost.com/kb/how-to-configure-cpanel-mysql-mariadb-or-postgresql-for-remote-connections/


###  firewall



Also, you need to add the PostgreSQL port 5432 on your firewall to allow the connections. You’ll do this by editing the firewall configuration:

  nano /etc/csf/csf.conf
You will append the port number ‘5432’ to the TCP_IN and TCP_OUT settings. Then, restart the firewall:

  csf -ra
Lastly, you will want to ensure that your firewall doesn’t start sending false positive alerts about the postgresql process. This is set by default on Knownhost servers, but you may want to confirm. If so, you can search for the entry in the file, and if present, then PG is already ignored. If not, then you will want to add it. Use the following command to see if it is already present in the file:

  grep postgres /etc/csf/csf.pignore
If you don’t get any output from that command, then you will need to add the entry. The image below depicts an ignored Postgres executable:


  nano /etc/csf/csf.pignore
Add the following to the bottom of the file:

  exe:/usr/bin/postgres
Restart the firewall:

  csf -ra
Now, you can test your connection from the remote IP!