#  Class: BrowserWindow

https://www.electronjs.org/docs/latest/api/browser-window

mainWindow = new BrowserWindow({ ... });
mainWindow.setAlwaysOnTop(true, 'screen');


 let opts = {
    show: false,
    icon: path.join(__dirname, 'app-window-icon.png')
  };
  Object.assign(opts, config.get('winBounds'));
  mainWindow = new BrowserWindow(opts);



``` default size
    mainWindow = new BrowserWindow({
    width: 2000, // custom value
    height: 900, // custom value
    useContentSize: true
     })
  ```