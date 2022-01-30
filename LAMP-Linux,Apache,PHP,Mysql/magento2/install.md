https://linuxhostsupport.com/blog/how-to-install-magento-2-on-ubuntu-20-04/


rerequisites
An Ubuntu 20.04 VPS with root access enabled, or a user with or a user with Sudo privileges is also required
2GB of RAM or higher
MySQL 5.6 or 5.7 version, (or MariaDB >= 10.0, or higher, Percona 5.7, or any other binary-compatible MySQL database server)
nginx, or Apache webserver with mod_rewrite module enabled
PHP 7.3 with bcmath, ctype, curl, dom, gd, hash, iconv, intl, libxml, mbstring, openssl, pdo_mysql, simplexml, soap, xsl and zip extensions enabled. Also, for performance reasons, it is a good idea to install and enable the opcache extension.
A valid domain name for accessing the Magento 2 website. Also, a valid SSL certificate is required for accessing the website using HTTPS.


Step 4: Install Magento 2
We can now proceed with the Magento 2 installation. At the time of writing this article, the latest stable version of Magento is version 2.3.5.
First, go to the GitHub repository and download the latest version of Magento with the following command:

mkdir -p /var/www/magento2/
cd /var/www/magento2/
git clone https://github.com/magento/magento2.git /var/www/magento2/
Next, check the latest version of Magento 2 with the following command:

git checkout $(git describe --tags $(git rev-list --tags --max-count=1))
Next, we will need to install Composer to install all necessary Magento components. You can install Composer by just running the following command:

curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
cd /var/www/magento2
composer install
bin/magento setup:install --base-url=http://localhost/ --db-host=localhost --db-name=magentodb --db-user=magento --db-password=strongPassword --admin-firstname=FirstName --admin-lastname=LastName --admin-email=your@emailaddress.com --admin-user=magentoadmin --admin-password=strong-password --language=en_US --currency=USD --timezone=America/Chicago --use-rewrites=1
Do not forget to replace the domain name, database password, admin username, password, and admin email address accordingly.



CREATE OR REPLACE USER magento@localhost IDENTIFIED BY 'strongPassword';