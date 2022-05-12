# recreate git file 

sometime the .git file not work properly. you need re-create

### clear old .git files
```sh
rm -rf .git
```

in windows

use 
git 
```sh
del -rf .git
```


remove subfolder git file, 'doggoArena_base_project' is subfolder

```
cd doggoArena_base_project
rm -rf .git
cd ..
```

```
git config --global init.defaultBranch main
```

```sh
git config --global credential.helper store
git config --global user.email "jiharry@hotmail.com"
git config --global user.name "Harry Ji"
```



### initiate new git file

```sh
git init
```
```
curl https://www.toptal.com/developers/gitignore/api/node,linux,rails,macos,windows > .gitignore
```

add all current file and folder
```sh
git add .
```

add commit messagegit

```sh
git commit -m  "`date`"
```

change to main branch
```sh
git branch -M main
```

### create repository on github.com

click new
![Screenshot from 2021-10-11 08-05-03](https://user-images.githubusercontent.com/21187699/136813331-171f0b1c-6e30-421d-a543-8a5c68a16f7b.png)


click create repository

![Screenshot from 2021-10-11 08-08-38](https://user-images.githubusercontent.com/21187699/136814744-7685c82f-b6c6-4d2b-afe1-b24bf8bdf3e6.png)

click code, copy Https 

![Screenshot from 2021-10-11 08-12-51](https://user-images.githubusercontent.com/21187699/136814541-628c5be8-0e09-46fa-8535-4a4974e1ec1a.png)


### add your remote repository 
```sh
git remote add origin https://github.com/harryji168/amazing_amazon.git
```

### force push the project
```sh
git push -u origin main --force
```
git config --global credential.helper store


# Git: Message 'src refspec master does not match any' when pushing commits in Git

## solved
have do 
```
git branch -M main
```
<<<<<<< HEAD
befoew 
=======
befoe 
>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
```
git remote add origin https://github.com/harryji168/phplist_xotours.git
```
## reason
when push 
```
git push -u origin main
```
get this error


```
git show-ref
```
get 
0c224727dc36f4f14e73fe2385e13ed9185a5193 refs/heads/master

Due to the recent "Replacing master with main in GitHub" action, you may notice that there is a refs/heads/main. As a result, the following command may change from git push origin HEAD:master to git push origin HEAD:main

change to

```
git push -u origin main
```