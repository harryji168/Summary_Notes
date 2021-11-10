
# How to fix Git always asking for user credentials


```sh
git config --global credential.helper store
```
 
git config --global user.email "jiharry@hotmail.com"
git config --global user.name "Harry Ji"

https://www.freecodecamp.org/news/how-to-fix-git-always-asking-for-user-credentials/



Save the username and password for a session (cache it);
git config --global credential.helper cache
You can also set a timeout for the above setting
git config --global credential.helper 'cache --timeout=600'
Bingo, you just fixed it, Git will never ask for your credentials again.