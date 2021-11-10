# Each update git 

### need update current version

```sh
git fetch
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
git push
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