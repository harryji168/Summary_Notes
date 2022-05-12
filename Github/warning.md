# LF will be replaced by CRLF in git - What is that and is it important? [duplicate]

```
git config core.autocrlf false
```

https://stackoverflow.com/questions/5834014/lf-will-be-replaced-by-crlf-in-git-what-is-that-and-is-it-important


1968

In Unix systems the end of a line is represented with a line feed (LF). In windows a line is represented with a carriage return (CR) and a line feed (LF) thus (CRLF). when you get code from git that was uploaded from a unix system they will only have an LF.

If you are a single developer working on a windows machine, and you don't care that git automatically replaces LFs to CRLFs, you can turn this warning off by typing the following in the git command line

git config core.autocrlf true
If you want to make an intelligent decision how git should handle this, read the documentation

Here is a snippet