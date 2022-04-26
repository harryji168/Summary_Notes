history: 

 'username' => 'owner-pet',
	'password' => '0216',
	'database' => 'owner-pet',
	'dbdriver' => 'mysqli',

1. docker file Dockerfile  
```
gcloud config set project codeigniter-angularjs-0218
```
```
gcloud config set run/region us-central1
```

```
gcloud builds submit --tag gcr.io/codeigniter-angularjs-0218/test-db
```


```
gcloud run deploy --image gcr.io/codeigniter-angularjs-0218/test-db  --platform managed --add-cloudsql-instances codeigniter-angularjs-0218:us-central1:owner-pet --set-env-vars CLOUD_SQL_CONNECTION_NAME=codeigniter-angularjs-0218:us-central1:owner-pet
```
 
https://app-docker-e5ripsmmea-uc.a.run.app/

2. vpc 

app.yaml 
gcloud app deploy

https://yotube-demo-348104.uc.r.appspot.com


3. compute instance 
sh deploy.sh

http://34.70.169.173/


service

VM Manager (OS Config API)
Container Analysis API
Binary Authorization API
Cloud Source Repositories API
Cloud SQL Admin API


VPC
us-central1	default			
10.128.0.0/20	10.128.0.1			Off	




gcloud auth activate-service-account 849042100555-compute@developer.gserviceaccount.com --key-file=./codeigniter-angularjs-0218-81e3167a6080.json


service-849042100555@serverless-robot-prod.iam.gserviceaccount.com



 github-cloudbuild@codeigniter-angularjs-0218.iam.gserviceaccount.com

 github-codeigniter-angularjs-0218-b024de6d26f1.json

 gcloud auth activate-service-account github-cloudbuild@codeigniter-angularjs-0218.iam.gserviceaccount.com  --key-file=./github-codeigniter-angularjs-0218-b024de6d26f1.json