https://stackoverflow.com/questions/60640996/how-to-connect-to-google-cloud-sql-instance-using-php

https://cloud.google.com/php/getting-started/getting-started-on-compute-engine


1. select project_id from project
https://console.cloud.google.com/projectselector2/home/dashboard?_ga=2.255701454.775312621.1650606175-752891713.1649099803

2. Enable access to API  'Compute Engine API'.

https://console.cloud.google.com/apis/enableflow?project=yotube-demo-348104

gcloud config set project yotube-demo-348104

php -S localhost:8080


https://stackoverflow.com/questions/60640996/how-to-connect-to-google-cloud-sql-instance-using-php

MY_INSTANCE_NAME='my-app-instance'
ZONE=us-central1-a

gcloud compute instances create $MY_INSTANCE_NAME \
    --image-family=ubuntu-1804-lts \
    --image-project=ubuntu-os-cloud \
    --machine-type=g1-small \
    --scopes userinfo-email,cloud-platform,sql-admin \
    --metadata-from-file startup-script=scripts/startup-script.sh \
    --zone $ZONE \
    --tags http-server


gcloud compute instances get-serial-port-output my-app-instance --zone us-central1-a


gcloud compute firewall-rules create default-allow-http-80 \
    --allow tcp:80 \
    --source-ranges 0.0.0.0/0 \
    --target-tags http-server \
    --description "Allow port 80 access to http-server"


    gcloud compute instances list



    sudo apt install mysql-client-core-5.7



    mysql --host=10.92.224.4 --user=sample --password