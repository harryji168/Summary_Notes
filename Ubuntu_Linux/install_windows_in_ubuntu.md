# How to Install and Use Wine on Ubuntu 20.04

![featured_hu7f6f0249d2479cb2ade34e52b1558f37_21457_768x0_resize_q75_lanczos](https://user-images.githubusercontent.com/21187699/136710583-58e7f286-01ea-44a7-9606-9eb76315dd69.jpg)

Wine is an open-source compatibility layer that allows you to run Windows applications on Unix-like operating systems such as Linux, FreeBSD, and macOS. Wine is an acronym for “Wine Is Not an Emulator”. It translates Windows system calls into equivalent POSIX calls used by Unix-based operating systems, allowing you to seamlessly integrate Windows programs into your desktop environment.


Not all Windows applications will run in Wine, and even if they do, they may not behave in the same way they normally would. The Wine AppDB is a database containing a list of applications that have been tested and confirmed to work under Wine.


Wine isn’t always the best option to run Windows programs on Linux. You can also use a virtualization tool like VirtualBox or VMware , but they require more system resources and a Windows installation file.

This article describes how to install Wine on Ubuntu 20.04. We will show you how to install the distro default version 5.0 and the latest version 6.x from the WineHQ repositories. The same instructions apply for any Ubuntu-based distribution, including Zorin OS, Linux Mint, and Elementary OS.

### Installing Wine 5.0 on Ubuntu
The Wine packages are included in the default Ubuntu repositories and can be easily installed with the apt package manager. This is the easiest way to install Wine on Ubuntu. However, the distro version may lag behind the latest release of Wine.

Most of the Windows applications are built for 32-bit architecture. The first step is to enable multiarch, which allows you to install both 64 and 32-bit packages on the machine:

```sh
sudo dpkg --add-architecture i386
sudo apt update
```

Install Wine:
```sh 
sudo apt install wine64 wine32
```

Once the installation is complete, verify it by printing the wine version :

```sh
wine --version
```

The current version of Wine available in the Ubuntu 20.04 repositories is 5.0.

wine-5.0 (Ubuntu 5.0-3ubuntu1)

That’s it. Wine has been installed on your machine, and you can start using it.



### Installing Wine 6.0 on Ubuntu
In this section, we will provide a step by step instructions about how to install Wine version 6 on Ubuntu 20.04.

If you are running a 64-bit Ubuntu system, enable the 32-bit architecture and update the packages list:

```sh
sudo dpkg --add-architecture i386
sudo apt update
```
 
Import the WineHQ repository’s GPG key:
```sh
wget -qO- https://dl.winehq.org/wine-builds/winehq.key | sudo apt-key add -
```

Add the WineHQ repository to your system:
```sh
sudo apt install software-properties-common
sudo apt-add-repository "deb http://dl.winehq.org/wine-builds/ubuntu/ $(lsb_release -cs) main"
```

Install Wine by typing:
```sh
sudo apt install --install-recommends winehq-stable
```
This will install a bunch of packages. Once completed, verify the Wine installation by typing:

```sh
wine --version
```


At the time of writing this article, the latest major release of the Wine is version 6.0:

wine-6.0
Wine has been installed and ready to be used.



### Configuring Wine
To start configuring Wine, run the winecfg command in your terminal. The command installs Mono and Gecko and sets the Wine environment:

```sh 
winecfg
```

A dialog will appear asking whether you want to install the wine-mono package:

![Screenshot from 2021-10-10 12-38-39](https://user-images.githubusercontent.com/21187699/136710775-03e9ed17-c8ac-41c7-8451-1610592af0c5.png)


Click on the “Install” button, and the installation will start. Once done, a new dialog will appear, prompting you to install Gecko. Again click on the “Install” button.
 

When the installation is completed, the Wine configuration dialog will be shown. Here you can configure various Wine settings. The default settings should be sufficient in most cases. Once finished, close the dialog box.

![Screenshot from 2021-10-10 12-38-51](https://user-images.githubusercontent.com/21187699/136710804-4d5d7816-4346-429b-8440-b9855d7c50e4.png)

 
### Installing Notepad++ on Ubuntu
Now that Wine is installed and configured, we will explain how to install Windows applications on your Ubuntu.

In this tutorial, we’ll show you how to install Notepad++, one of the most popular Windows text editors. Launch your browser and download the installation file from the Notepad++ download page .

Once the download is complete, start the installation by right-clicking on the .exe file and selecting “Open With Wine Windows Program Loader”.

![Screenshot from 2021-10-10 12-39-03](https://user-images.githubusercontent.com/21187699/136710836-3e829bfe-1337-4913-ba3e-d06d68e53fdf.png)

 
The installation wizard will start, select the language, and install Notepad++ in the same way you would install any application on a Windows computer.

![Screenshot from 2021-10-10 12-39-14](https://user-images.githubusercontent.com/21187699/136710846-79aa30eb-91df-4993-8f28-3412775fd11c.png)
 

Windows applications are installed in the ~/.wine/drive_c/ directory.

To start the Notepad++ editor navigate to the ~/.wine/drive_c/Program Files (x86)/Notepad++ directory and double click on the notepad++.exe file.

 ![Screenshot from 2021-10-10 12-39-24](https://user-images.githubusercontent.com/21187699/136710856-8babd9f9-38cf-466b-8889-759cd2bb2740.png)
 

You can also start the application from the Activities search bar.








reference: https://linuxize.com/post/how-to-install-wine-on-ubuntu-20-04/





# uninstall wine application 

Type in a terminal or press Alt+F2 and type wine uninstaller will give you access to the built in Add/Remove tool from wine. From there you can uninstall a program you have installed in a bottle.

To completely remove the bottle for your user (and thus remove everything from a wine bottle and start again) you can open a terminal and type rm -rf ~/.wine or as an alternative open Nautilus and in your home folder press Ctrl+H, locate the .wine folder and delete it. wine will create a new folder next time you try to use it.


<<<<<<< HEAD
https://askubuntu.com/questions/101064/uninstall-a-program-installed-with-wine#



# wine uninstaller


On the command line, just type this: 
```
wine uninstaller
```
. This will launch an Add/Remove applet similar to what you get in Windows, which will list your installed WINE programs. The name and the invocation are definitely not intuitive. Henceforth, the actions are simple.


On the command line, just type this: wine uninstaller. This will launch an Add/Remove applet similar to what you get in Windows, which will list your installed WINE programs. The name and the invocation are definitely not intuitive. Henceforth, the actions are simple.
=======
https://askubuntu.com/questions/101064/uninstall-a-program-installed-with-wine#
>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
