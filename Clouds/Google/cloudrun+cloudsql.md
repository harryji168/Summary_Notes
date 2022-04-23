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
hM2MoEMsph7k2ga9

5. cloud shell
 gcloud sql connect samplephp --user=root --quiet

 gcloud sql connect samplephp --user=sample --quiet

 6. gcloud config set project yotube-demo-348104

 7 create filesystem
 8.https://console.cloud.google.com/gcr/images/wordpress-347706?referrer=search&project=wordpress-347706
 enable Google Container Registry API
Google Enterprise API

9.gcloud builds submit --tag gcr.io/yotube-demo-348104/testapp
