history: 

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
 





2. vpc 

app.yaml 
gcloud app deploy
