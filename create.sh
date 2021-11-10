git init
git add .
git commit -m  "`date`"
git branch -M main
git remote add origin $1
git push -u origin main --force