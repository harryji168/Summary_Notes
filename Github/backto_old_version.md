# Git clone particular version of remote repository
You could "reset" your repository to any commit you want (e.g. 1 month ago).

Use git-reset for that:
```
git clone [remote_address_here] my_repo
cd my_repo
git reset --hard [ENTER HERE THE COMMIT HASH YOU WANT]
```

https://stackoverflow.com/questions/3555107/git-clone-particular-version-of-remote-repository

