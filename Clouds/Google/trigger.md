https://www.youtube.com/watch?v=6dLHcnlPi_U
Build a Docker Image and Publish It to GCP GCR & Artifact Registry using Github Actions


https://github.com/antonputra/tutorials/tree/main/lessons/087


docker-image.yml

name: Docker Image CI

on:
  push:
    branches: [ main ]
  pull_request:
    branches: [ main ]

jobs:

  build:

    runs-on: ubuntu-latest

    steps:
    - uses: actions/checkout@v3
    - name: Build the Docker image
      run: docker build . --file Dockerfile --tag my-image-name:$(date +%s)



google.yml 

# This workflow will build a docker container, publish it to Google Container Registry, and deploy it to GKE when there is a push to the main branch.
#
# To configure this workflow:
#
# 1. Ensure that your repository contains the necessary configuration for your Google Kubernetes Engine cluster, including deployment.yml, kustomization.yml, service.yml, etc.
#
# 2. Create and configure a Workload Identity Provider for GitHub (https://github.com/google-github-actions/auth#setting-up-workload-identity-federation)
#
# 3. Change the values for the GAR_LOCATION, GKE_ZONE, GKE_CLUSTER, IMAGE, REPOSITORY and DEPLOYMENT_NAME environment variables (below).
#
# For more support on how to run the workflow, please visit https://github.com/google-github-actions/setup-gcloud/tree/master/example-workflows/gke-kustomize

name: Build and Deploy to GKE

on:
  push:
    branches:
      - main

env:
  PROJECT_ID: ${{ secrets.GKE_PROJECT }}
  GAR_LOCATION: us-central1 # TODO: update region of the Artifact Registry
  GKE_CLUSTER: cluster-1    # TODO: update to cluster name
  GKE_ZONE: us-central1-c   # TODO: update to cluster zone
  DEPLOYMENT_NAME: gke-test # TODO: update to deployment name
  REPOSITORY: samples # TODO: update to Artifact Registry docker repository
  IMAGE: static-site

jobs:
  setup-build-publish-deploy:
    name: Setup, Build, Publish, and Deploy
    runs-on: ubuntu-latest
    environment: production

    permissions:
      contents: 'read'
      id-token: 'write'

    steps:
    - name: Checkout
      uses: actions/checkout@v3
      
    - uses: google-github-actions/849042100555-compute@developer.gserviceaccount.com
      with:
        service_account_key: ${{ secrets.SERVICE_ACCOUNT_KEY }}
        project_id: ${{ env.PROJECT_ID }}
        export_default_credentials: true
        
    - name: Docker configuration
      run: |-
        echo ${{steps.auth.outputs.access_token}} | docker login -u oauth2accesstoken --password-stdin https://$GAR_LOCATION-docker.pkg.dev
    # Get the GKE credentials so we can deploy to the cluster
    - name: Set up GKE credentials
      uses: google-github-actions/get-gke-credentials@v0
      with:
        cluster_name: ${{ env.GKE_CLUSTER }}
        location: ${{ env.GKE_ZONE }}

    # Build the Docker image
    - name: Build
      run: |-
        docker build \
          --tag "$GAR_LOCATION-docker.pkg.dev/$PROJECT_ID/$REPOSITORY/$IMAGE:$GITHUB_SHA" \
          --build-arg GITHUB_SHA="$GITHUB_SHA" \
          --build-arg GITHUB_REF="$GITHUB_REF" \
          .
    # Push the Docker image to Google Artifact Registry
    - name: Publish
      run: |-
        docker push "$GAR_LOCATION-docker.pkg.dev/$PROJECT_ID/$REPOSITORY/$IMAGE:$GITHUB_SHA"
    # Set up kustomize
    - name: Set up Kustomize
      run: |-
        curl -sfLo kustomize https://github.com/kubernetes-sigs/kustomize/releases/download/v3.1.0/kustomize_3.1.0_linux_amd64
        chmod u+x ./kustomize
    # Deploy the Docker image to the GKE cluster
    - name: Deploy
      run: |-
        # replacing the image name in the k8s template
        ./kustomize edit set image LOCATION-docker.pkg.dev/PROJECT_ID/REPOSITORY/IMAGE:TAG=$GAR_LOCATION-docker.pkg.dev/$PROJECT_ID/$REPOSITORY/$IMAGE:$GITHUB_SHA
        ./kustomize build . | kubectl apply -f -
        kubectl rollout status deployment/$DEPLOYMENT_NAME
        kubectl get services -o wide