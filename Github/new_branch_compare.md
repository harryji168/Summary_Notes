# Each Branch

Go to the root directory of your homework repository directory.
Checkout to your main branch:

```
git checkout main
```

Download your repo's latest changes, create a new branch named after your homework then checkout to it.

```sh
git fetch
```
(to see if there are any changes to pull from the remote repo)
```
git pull
```
(to fetch and merge all the changes from the remote repo. Do this in your master/main branch BEFORE creating the new branch)

```
git checkout -b <name-of-homework>
```



### add all files

```sh
git add .
```

### add commit message

```sh
git commit -m "message"
```

### push to the server

```sh 
<<<<<<< HEAD
git push --set-upstream origin 2019-12-25
=======
git push --set-upstream origin Branch
>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
```


## only add some file 
```
git add *.txt
```



## problem  How do I ignore an error on 'git pull' about my local changes would be overwritten by merge?

if you want remove all local changes - including files that are untracked by git - from your working copy, simply stash them:

```
git stash push --include-untracked
```

If you don't need them anymore, you now can drop that stash:
```
git stash drop
```