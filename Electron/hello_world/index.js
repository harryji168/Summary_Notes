const { app, BrowserWindow,screen } = require('electron')

// Global reference to the window object
let win

// This method will be called when Electron has finished
// initialization and is ready to create browser windows
app.on('ready', function(){

  const primaryDisplay = screen.getPrimaryDisplay()
  const { width, height } = primaryDisplay.workAreaSize


    // Create the window
    win = new BrowserWindow({width: 500, height: 300, x:width-3000,y:300,
                           autoHideMenuBar:true , alwaysOnTop:true })

    // Open and load index.html to the window
    win.loadURL('file://' + __dirname + '/index.html')

    //win.loadURL('https://github.com')

    // Emitted when the window is closed.

    win_status = new BrowserWindow({width: width, height: 100, x:0,y:height-100,
      autoHideMenuBar:true , alwaysOnTop:true, frame: false  })

    win_status.loadURL('https://github.com')

    win.on('closed', () => {
        // Dereference the window object
        win = null ;
        win_status.close();
    });
 
    console.log('window id is', win.getMediaSourceId());

    var cp = require('child_process');
    cp.fork(require.resolve('my-module/server1.js'))

    /*let spawn = require("child_process").spawn;
    let bat = spawn("xdotool type 'Hello world'")  
    bat.stdout.on("data", (data) => {
      // Handle data...
      console.log('data is', data)
    });
  
  bat.stderr.on("data", (err) => {
      // Handle error...
  });
  
  bat.on("exit", (code) => {
      // Handle exit
  });*/
})

// Quit the app if all windows are closed
app.on('window-all-closed', () => {
    app.quit()
})