# have arrow in the folder, and't open

https://github.com/harryji168/homework 

![Screenshot from 2021-10-16 18-18-31](https://user-images.githubusercontent.com/21187699/137606516-7d02141d-a415-44de-8b8a-b5e1c4341c60.png)

because these folders already git file, just delete 


# Git: Message 'src refspec master does not match any' when pushing commits in Git

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