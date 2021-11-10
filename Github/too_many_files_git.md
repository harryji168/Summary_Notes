# recreate git file 

sometime the .git file not work properly. you need re-create

### clear old .git files
```sh
rm -rf .git
```


### initiate new git file

```sh
git init
```
```
curl https://www.gitignore.io/api/node%2Clinux%2Crails%2Cmacos%2Cwindows > .gitignore
```

add all current file and folder
```sh
git add .
```

add commit message

```sh
git commit -m "first commit"
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

 

### check yo branch
```shell
git checkout -b blogs_in_rails
```

### push file
```shell
git push --set-upstream origin blogs_in_rails
```


# because too many files, can't do pull directly

![Screenshot from 2021-10-16 09-10-02](https://user-images.githubusercontent.com/21187699/137594963-8ec5aedc-968b-443c-8e8d-2329d9b2bd88.png)


too many file

![Screenshot from 2021-10-16 09-12-05](https://user-images.githubusercontent.com/21187699/137594997-2df3a26b-0811-4694-b80c-7810992ec008.png)


# goto checkout main
```
git checkout main
```
# go push
``` 
git push -u origin main --force
```

# then can do pull

![Screenshot from 2021-10-16 09-20-10](https://user-images.githubusercontent.com/21187699/137595079-0687bdca-21a0-41c7-8abd-155924b0b532.png)


# submitthe google form
![Screenshot from 2021-10-16 09-23-01](https://user-images.githubusercontent.com/21187699/137595109-bd30417a-e6df-4f04-9719-c0976e69da36.png)
