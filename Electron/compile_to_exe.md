# eletron 

https://stackoverflow.com/questions/40615837/how-to-compile-an-electron-application-to-a-exe


# for use in npm scripts
```
npm install electron-packager --save-dev
```
# for use from cli
``` 
sudo npm install electron-packager -g --unsafe-perm=true --allow-root
```
And package or deploy using:

electron-packager <sourcedir> <appname> --platform=win32 --arch=x86_64
If you would like to keep it with the Electron Installation, see Application Distribution.

Update :

Above command might throw an error

Unsupported arch=x86_64 (string); must be a string matching: ia32, x64, armv7l, arm64, mips64el

Suggested to use one of the options from ia32, x64, armv7l, arm64, mips64el

electron-packager <sourcedir> <appname> --platform=win32 --arch=x64
```
electron-packager AwesomeProject AwesomeProject --platform=win32 --arch=x64 --electron-version=1.6.2
```
```
https://www.electronjs.org/docs/latest/development/build-instructions-linux
```