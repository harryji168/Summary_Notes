https://www.youtube.com/watch?v=cBrn5IM4mA8

gcloud config set project wordpress-347706

gcloud sql connect wp-mysql --user=wordpress --quiet

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

5. cloud shell
 gcloud sql connect samplephp --user=root --quiet

 gcloud sql connect samplephp --user=sample --quiet
create database test;
use test;

 create tables MyGuests { id int, Lastname varchar(255), FirstName varchar(255)};

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