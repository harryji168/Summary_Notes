https://cloud.google.com/sql/docs/mysql/sql-proxy#install

wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O cloud_sql_proxy
chmod +x cloud_sql_proxy


wordpress-347706:us-central1:wp-mysql

 ./cloud_sql_proxy -instances=$INSTANCE_CONNECTION_NAME=tcp:3306 -credential_file=$GOOGLE_APPLICATION_CREDENTIALS &



 
