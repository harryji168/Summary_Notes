# npm run deploy
cd build
rm -rf .git
git init
git config  user.email "jiharry@hotmail.com"
git config  user.name "Harry Ji"
git config  credential.helper store
curl https://www.toptal.com/developers/gitignore/api/node,linux,rails,macos,windows > .gitignore

git add .
git commit -m  "`date`"
git checkout -b gh-pages
git branch -M gh-pages
git remote add origin $1
git push -u origin gh-pages --force
cd -