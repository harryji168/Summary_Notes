# Multiple "warning: already initialized constant Etc::" #1401

https://github.com/rbenv/ruby-build/issues/1401

```
gem uninstall etc 
```
and then 

```
gem update etc --default 
```

solved my problem.