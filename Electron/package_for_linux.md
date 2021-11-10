https://linuxhint.com/setup_electron_create_hello_world_application_linux/

```
npx @electron-forge/cli@latest import
```


Package Electron Application
You can use Electron Forge to package your application, as recommended by the official Electron documentation.


Run the command below to add Electron Forge to your project:

$ npx @electron-forge/cli@latest import
You should see some output like this:

✔ Checking your system

✔ Initializing Git Repository

✔ Writing modified package.json file

✔ Installing dependencies

✔ Writing modified package.json file

✔ Fixing .gitignore

We have ATTEMPTED to convert your app to be in a format that electron-forge understands.

Thanks for using "electron-forge"!!!
Review “package.json” file and edit or remove entries from “makers” sections according to your needs. For instance, if you don’t want to build an “RPM” file, remove entry related to building of “RPM” packages.

Run the following command to build the application package:

$ npm run make
You should get some output similar to this:

> helloworld@1.0.0 make /home/nit/HelloWorld

> electron-forge make

✔ Checking your system

✔ Resolving Forge Config

We need to package your application before we can make it

✔ Preparing to Package Application for arch: x64

✔ Preparing native dependencies

✔ Packaging Application

Making for the following targets: deb

✔ Making for target: deb - On platform: linux - For arch: x64
I edited the “package.json” file to build only the “DEB” package. You can find built packages in the “out” folder located inside your project directory.

