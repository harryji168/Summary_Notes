# Frameless Window

const { BrowserWindow } = require('electron')
const win = new BrowserWindow({ width: 800, height: 600, frame: false })
win.show()

https://www.electronjs.org/docs/latest/api/frameless-window