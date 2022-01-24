#!/usr/bin/env sh

# abort on errors
set -e

# build
npm run deploy

# navigate into the build output directory
cd dist

# if you are deploying to a custom domain
# echo 'www.example.com' > CNAME

rm -rf .git
git init
git config  user.email "jiharry@hotmail.com"
git config  user.name "Harry Ji"
git config  credential.helper store

git add .
git commit -m  "`date`"

git checkout -b main
git branch -M main
git remote add origin $1
git push -u origin main --force

git init
git add -A
git commit -m 'deploy'

# if you are deploying to https://<USERNAME>.github.io
# git push -f git@github.com:<USERNAME>/<USERNAME>.github.io.git main

# if you are deploying to https://<USERNAME>.github.io/<REPO>
# git push -f git@github.com:harryji168/vuejs.git main:gh-pages
git checkout -b gh-pages
git remote add origin $1
git push -u origin gh-pages --force
cd -