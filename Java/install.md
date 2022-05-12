# https://technowikis.com/44397/how-to-install-java-on-ubuntu-21-10



sudo dpkg -i  jdk-18_linux-x64_bin.deb
sudo update-alternatives --install /usr/bin/java java /usr/lib/jvm/jdk-18/bin/java 1
ls /usr/lib/jvm
sudo update-alternatives --install /usr/bin/javac javas /usr/lib/jvm/jdk-18/bin/javac 1
java -version
javac -version 



#### How To Install Java with Apt on Ubuntu 20.04

```
sudo apt update
```


```
java -version
```

```
sudo apt install default-jre
```

```
sudo apt install default-jdk
```

```
javac -version
```

https://www.digitalocean.com/community/tutorials/how-to-install-java-with-apt-on-ubuntu-20-04


