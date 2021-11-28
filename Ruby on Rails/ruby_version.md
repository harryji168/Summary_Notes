# Integrating RVM with gnome-terminal



https://rvm.io/integration/gnome-terminal


![Screenshot from 2021-10-22 10-50-39](https://user-images.githubusercontent.com/21187699/138500616-f8cfedda-ba42-46f2-b544-fe94a9895a96.png)


#  if you probe for all installed packages (apt list) then you will find most of the necessary tooling already available. For Jekyll, we need to focus on Ruby and here are the packages available

```
apt list ruby
```

```
rvm reinstall ruby-3.0.0
```

# install local folder for different version
under folder
```
rvm install "ruby-2.6.3"
gem install bundler:2.0.2
```

<<<<<<< HEAD
=======
rvm reinstall ruby-2.6.3

>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
#  Can't find Python executable "python"
```
sudo apt-get update
sudo apt-get install python2.7    
ln -s /usr/bin/python2.7 /usr/bin/python 

```

https://stackoverflow.com/questions/23571257/cant-find-python-executable-python