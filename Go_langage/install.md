# How To Install Go on Ubuntu 20.04 step by step instructions

From a terminal execute the following command to install Go language executables:
```
sudo apt install golang
```
Confirm the installation by checking for the go version:
```
go version
```

go version go1.13.8 linux/amd64


Download Golang hello world example:
```
go get github.com/golang/example/hello
```

After execution of the above command a new directory named go will be created in your user home directory containing a source code and executable binary of the Hello World Golang program.

Given that the new go directory is located within you user home directory, to execute the hello program run:
```
~/go/bin/hello
```
Hello, Go examples