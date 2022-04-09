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
