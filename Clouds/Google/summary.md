1. docker file

gcloud builds submit --tag gcr.io/yotube-demo-348104/testapp
gcloud run deploy --image gcr.io/yotube-demo-348104/testapp --platform managed --add-cloudsql-instances yotube-demo-348104:us-central1:samplephp --set-env-vars CLOUD_SQL_CONNECTION_NAME=yotube-demo-348104:us-central1:samplephp
