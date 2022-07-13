# Would it be safe to enable nodeIntegration in Electron on a local page that is packaged with the app?




https://stackoverflow.com/questions/57505082/would-it-be-safe-to-enable-nodeintegration-in-electron-on-a-local-page-that-is-p




TL;DR: Enabling nodeIntegration only imposes risks if you load and execute code from untrusted sources, i.e. the internet or from user input.

If you are completely sure that your application will only run the code you have created (and no NodeJS module loads scripts from the internet), basically, there is no to very little risk if enabling nodeIntegration.

However, if you allow the user to run code (i.e. input and then eval it) or you provide plug-in APIs from which you do not have any control over the plug-ins loaded, the risk level rises because NodeJS allows any NodeJS script, ex., to manipulate the filesystem.

On the other hand, if you disable nodeIntegration, you have no way of communicating with the main process or manipulating the BrowserWindow, thus cannot create custom window controls.