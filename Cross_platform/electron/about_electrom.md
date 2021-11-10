# What is Electron JS?
Electron is a framework for building cross-platform desktop applications with JavaScript, HTML and CSS.


Because it is cross-platform, we can run the app in Windows, macOS, and Linux operating systems. Otherwise, we need to have Visual Studio code for building Windows apps and Xcode for making macOS apps.

Which products uses Electron JS?
A lot of popular companies are using Electron JS for making their apps. Some of the giants in this list are Visual Studio Code, Whatsapp, Twitch, Slack Figma, etc.


Steps to install Electron on Ubuntu
So let’s look in to the steps to install Electron JS on Ubuntu operating system.

1. Install Node.js
Electron requires to have Nodejs(A JavaScript runtime) installed on our system.

16.2.0 is the current latest version and it can be installed by running the command below on our Terminal.

curl -sL https://deb.nodesource.com/setup_16.x | sudo -E bash -
sudo apt-get install -y nodejs
2. Update NPM(Optional)
Node Package Manager(NPM) is automatically installed with the installation of Nodejs. But if we need to update it to the latest version, use the command below.

sudo npm install npm@latest -g
3. Install Electron globally
Now we can install Electron globally on our system using NPM.
 

`` /usr/lib/node_modules/electron/
```
```
sudo npm install -g electron --unsafe-perm=true --allow-root
```

4. Create an Electron project
So we have installed the Electron package on our Ubuntu system. Now let’s create a simple “Hello World” app using it.

4.1 Initialize the project
First, create a project directory and a package.json file under it.

Now direct to the folder and make a package.json inside it.

mkdir AwesomeProject
cd /AwesomeProject
npm init
Enter the project details if you wish or skip.

https://riptutorial.com/electron/example/19487/hello-world-

4.2 Create a View
Now create the file we wanted to be viewed when opening our app. Electron JS uses HTML to render the view. So we need to create an index.html file.

<html>
  <head>
    <title>Hello World Application</title>
  </head>
  <body>
    <h1>Hello World</h1>
  </body>
</html>
4.3 Create an Index file
In package.json, we programmed that the root file of our project is index.js. So we need to create it. Some points about the structure of this index file are listed below.

Import the components we need in our project
Create a new browser window.
Define the view it wants to show on loading the window(index.html).
const { app, BrowserWindow } = require("electron");
const url = require("url");

function newApp() {
  win = new BrowserWindow();
  win.loadURL(
    url.format({
      pathname: "index.html",
      slashes: true
    })
  );
}

app.on("ready", newApp);
5. Running our application
Now we can run our Electron app using the command below. So execute the below command from root directory of our project.

electron .

Summary
So in this article, we have installed Electron JS on our ubuntu system. We also created a simple “Hello World” Electron JS app and run it on our system.


https://www.techomoro.com/how-to-install-and-set-up-electron-on-ubuntu-19-04-disco-dingo/