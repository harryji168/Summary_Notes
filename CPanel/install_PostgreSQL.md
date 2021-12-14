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