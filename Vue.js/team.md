https://www.djamware.com/post/5e07231cecfe522f24e9cef0/vuejs-tutorial-learn-to-build-a-web-app-quicklycd 



### vue.config.js

// vue.config.js file to be place in the root of your repository

module.exports = {
  publicPath: process.env.NODE_ENV === 'production'
    ? '/my-project/'
    : '/'
}



#!/usr/bin/env sh

# abort on errors
set -e

# build
npm run build

# navigate into the build output directory
cd dist

# if you are deploying to a custom domain
# echo 'www.example.com' > CNAME

git init
git add -A
git commit -m 'deploy'

# if you are deploying to https://<USERNAME>.github.io
# git push -f git@github.com:<USERNAME>/<USERNAME>.github.io.git main

# if you are deploying to https://<USERNAME>.github.io/<REPO>
# git push -f git@github.com:harryji168/vuejs.git main:gh-pages
git checkout -b gh-pages
git remote add origin https://github.com/harryji168/vuejs.git
git push -u origin gh-pages --force
cd -