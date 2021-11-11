# fatal: unable to get credential storage lock: File exists


https://git-scm.com/book/en/v2/Git-Tools-Credential-Storage

```
$ git config --global credential.helper cache
```
and local
```
$ git config credential.helper cache
```