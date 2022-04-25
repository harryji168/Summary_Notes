history: 

1. docker file Dockerfile  
```
gcloud builds submit --tag gcr.io/yotube-demo-348104/app-docker
```
```
gcloud run deploy --image gcr.io/yotube-demo-348104/app-docker  --platform managed --add-cloudsql-instances yotube-demo-348104:us-central1:samplephp --set-env-vars CLOUD_SQL_CONNECTION_NAME=yotube-demo-348104:us-central1:samplephp
```
```
gcloud config set run/region us-central1`
```

https://app-docker-e5ripsmmea-uc.a.run.app