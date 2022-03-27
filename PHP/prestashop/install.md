https://www.rosehosting.com/blog/how-to-install-php-7-4-with-nginx-on-ubuntu-20-04/

apt-get install php7.4 -y


sudo nginx -t

# You must install PHP zip extension first

https://www.codegrepper.com/code-examples/php/install+php+zip+extension+ubuntu+20.04
sudo apt update
sudo apt install php7.4
sudo apt install php7.4-common php7.4-mysql php7.4-xml php7.4-xmlrpc php7.4-curl php7.4-gd php7.4-imagick php7.4-cli php7.4-dev php7.4-imap php7.4-mbstring php7.4-opcache php7.4-soap php7.4-zip php7.4-intl -y


Shop password: password


413 Request Entity Too Large
nginx/1.18.0 (Ubuntu)

https://medium.com/@svsh227/error-413-request-entity-too-large-in-nginx-with-client-max-body-size-changes-in-nginx-6aacd525fe11#:~:text=Save-,Error%3A%20413%20%E2%80%9CRequest%20Entity%20Too%20Large%E2%80%9D%20in%20Nginx%20with,to%20modify%20your%20nginx%20configuration.

client_max_body_size 100M;

https://ubiq.co/tech-blog/fix-504-gateway-timeout-error-nginx/

max_execution_time = 300