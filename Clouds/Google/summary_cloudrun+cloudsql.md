https://www.youtube.com/watch?v=cBrn5IM4mA8

$username = 'owner-pet';
$password = '0216';
$dbName = 'owner-pet';
$dbHost = "34.67.189.246";

gcloud config set project codeigniter-angularjs-0218

gcloud sql connect owner-pet --user=owner-pet --quiet

use owner-pet;
select * from pet_types;


10.25.144.4

try {
    $dbh = new PDO('mysql:host=10.25.144.4;dbname=owner-pet;unix_socket=/cloudsql/codeigniter-angularjs-0218:us-central1:owner-pet', 'owner-pet', '0216');
    foreach($dbh->query('SELECT * from pet_types') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O cloud_sql_proxy
chmod +x ./cloud_sql_proxy
 
./cloud_sql_proxy -instances=codeigniter-angularjs-0218:us-central1:owner-pet -dir=./cloudsql



get ip address
https://www.cyberciti.biz/faq/how-to-find-my-public-ip-address-from-command-line-on-a-linux/

```
dig +short myip.opendns.com @resolver1.opendns.com
```
35.203.131.89

https://www.youtube.com/watch?v=jvZXbJv6qJ4y


https://www.youtube.com/watch?v=jvZXbJv6qJ4

youtube-demo

1.apis
https://console.cloud.google.com/apis/dashboard?project=yotube-demo-348104

2. enable cloud sql admin api
https://console.cloud.google.com/apis/library/sqladmin.googleapis.com?project=yotube-demo-348104
3.IAM 

youtube-demo@yotube-demo-348104.iam.gserviceaccount.com	youtube-demo	
Cloud SQL Client

4. create mysql instances
samplephp
root
hM2MoEMsph7k2ga9

sample
Password123!


34.133.79.237
codeigniter-angularjs-0218:us-central1:samplephp

5. cloud shell
 gcloud sql connect samplephp --user=root --quiet

 gcloud sql connect samplephp --user=sample --quiet
create database test;
use test;

 create table MyGuests ( id int, Lastname varchar(255), FirstName varchar(255));

 insert into MyGuests (id, Lastname, FirstName ) values (1, "Ji", "Harry");


 6. gcloud config set project yotube-demo-348104

 7 create filesystem
 8.https://console.cloud.google.com/gcr/images/wordpress-347706?referrer=search&project=wordpress-347706
 enable Google Container Registry API
Google Enterprise API

9.gcloud builds submit --tag gcr.io/yotube-demo-348104/testapp

gcloud run deploy --image gcr.io/yotube-demo-348104/testapp --platform managed --add-cloudsql-instances yotube-demo-348104:us-central1:samplephp --set-env-vars CLOUD_SQL_CONNECTION_NAME=yotube-demo-348104:us-central1:samplephp

  
  gcloud config set run/region us-central1

10. cloud run 
https://console.cloud.google.com/run?referrer=search&project=yotube-demo-348104


Additionally make sure that you have both Cloud SQL and Cloud SQL Admin API enabled (normally only the first one is enabled in your Google Cloud Console).

gcloud auth list

gcloud config set account