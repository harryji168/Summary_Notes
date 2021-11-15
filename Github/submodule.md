https://stackoverflow.com/questions/56799562/git-submodule-add-error-does-not-have-a-commit-checked-out

```
git submodule add https://....@bitbucket.org/..../confusionmatrix.git
```

Find leftover .git folder in some sub directories (the directory is shoown in the error msg!)
find ./ -name '.git'
Delete it (make sure to have the right folder!!!
rm -r yourfolder/.git/