https://cloud.google.com/sql/docs/mysql/sql-proxy#install

wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O cloud_sql_proxy
chmod +x cloud_sql_proxy


wordpress-347706:us-central1:wp-mysql

 ./cloud_sql_proxy -instances=$INSTANCE_CONNECTION_NAME=tcp:3306 -credential_file=$GOOGLE_APPLICATION_CREDENTIALS &



  ./cloud_sql_proxy -instances=wordpress-347706:us-central1:wp-mysql=tcp:3306 -credential_file=../wordpress-347706-27e873008504.json &


$env:GOOGLE_APPLICATION_CREDENTIALS="<CREDENTIALS_JSON_FILE>"
$env:DB_HOST="127.0.0.1"
$env:DB_USER="<DB_USER_NAME>"
$env:DB_PASS="<DB_PASSWORD>"
$env:DB_NAME="<DB_NAME>"
