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