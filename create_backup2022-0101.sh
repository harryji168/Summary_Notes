rm -rf .git
git config --global user.email "jiharry@hotmail.com"
git config --global user.name "Harry Ji"
git config --global credential.helper store
git init
git add .
git commit -m  "`date`"
git checkout -b main
git branch -M main
git remote add origin $1
git push -u origin main --force