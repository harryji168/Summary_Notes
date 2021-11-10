#  How to create a transparent window with Electron Framework


mplementation
The MainWindow class constructor expects an object as first parameter. In order to make our window transparent, we need to provide the transparent and frame property to true and false respectively:

const {BrowserWindow} = require('electron')

let win = new BrowserWindow({
    width: 800, 
    height: 600,
    transparent:true,
    frame: false
})

win.show()
Tipically, if the transparent windows is meant to be the unique and initial, then you should make the changes in the main.js file:

function createWindow () {
  // Create the browser window.
  mainWindow = new BrowserWindow({
    width: 800,
    height: 600, 
    transparent: true,
    frame:false
  })

  // and load the index.html of the app.
  mainWindow.loadURL(`file://${__dirname}/index.html`)

  // Open the DevTools.
  //mainWindow.webContents.openDevTools()

  // Emitted when the window is closed.
  mainWindow.on('closed', function () {
    // Dereference the window object, usually you would store windows
    // in an array if your app supports multi windows, this is the time
    // when you should delete the corresponding element.
    mainWindow = null
  })
}
That should make already your window transparent. Set as content of your index.html file the following markup:

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Transparent Window</title>
    </head>
    <body>
        <div>
             <img src="http://ourcodeworld.com/resources/img/ocw-empty.png" width="300" height="300"/>
        </div>
    </body>
</html>
and execute the project using npm start, your app will look like:

Transparent window electron

As you can see, the window is totally transparent and you can see VSCode at the background.

Limitations
You can not click through the transparent area. We are going to introduce an API to set window shape to solve this, see the issue for details.
Transparent windows are not resizable. Setting resizable to true may make a transparent window stop working on some platforms.
The blur filter only applies to the web page, so there is no way to apply blur effect to the content below the window (i.e. other applications open on the user's system).
On Windows operating systems, transparent windows will not work when DWM is disabled.
On Linux users have to put --enable-transparent-visuals --disable-gpu in the command line to disable GPU and allow ARGB to make transparent window, this is caused by an upstream bug that alpha channel doesn't work on some NVidia drivers on Linux.
On Mac the native window shadow will not be shown on a transparent window


# https://ourcodeworld.com/articles/read/315/how-to-create-a-transparent-window-with-electron-framework
https://stackoverflow.com/questions/53538215/cant-succeed-in-making-transparent-window-in-electron-javascript
https://github.com/electron/electron/issues/20357


# using svg 

# animation 