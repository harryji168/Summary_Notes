history: 

https://app-docker-e5ripsmmea-uc.a.run.app

34.133.243.2
10.92.224.4


1. docker file Dockerfile  
```
gcloud config set project yotube-demo-348104
```
```
gcloud builds submit --tag gcr.io/yotube-demo-348104/app-docker
```
```
gcloud config set run/region us-central1`
```

```
gcloud run deploy --image gcr.io/yotube-demo-348104/app-docker  --platform managed --add-cloudsql-instances yotube-demo-348104:us-central1:samplephp --set-env-vars CLOUD_SQL_CONNECTION_NAME=yotube-demo-348104:us-central1:samplephp
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