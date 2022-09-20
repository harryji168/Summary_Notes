# inside browser and file

UI.Vision RPA has two kind of storage modes for macros and data:

Inside the web browser using HTML5 local storage. This is the default mode of the RPA Core, as it is the only way browser extensions can store information

 Directly on the hard drive. This method feels much more natural and convenient. It requires the FileAccess XModule to be installed. When the hard-drive storage mode is active, you will notice the hard drive icon on every UI.Vision RPA Tab that read and writes information directly to the disk. In hard-drive mode csvRead and csvSave read and save directly to files, instead of using the browser local storage.

The hard drive storage option is great for team collaboration. It works with all source code control system e. g. Git (GitHub) or Perforce. This allows all team members to easily share and version control macros (test cases), images and CSV files.


# https://ui.vision/rpa/x/download#install-linux

How to install on Linux


# export as JSON, ZIP.auto HTM
L

# Default macro directory => in download folder

Chrome extensions in general can not write to a file directly (except as download), and they can not read from the hard drive (except with the file upload 11 feature). This is a Chrome and Firefox Quantum security feature.

=> Kantu stores its macros and all other setting in the so called Local Storage 131 of the web browser.

https://forum.ui.vision/t/default-macro-directory/93

The installer is provided in the modern AppImage format:

(1) To install, make the AppImage file executable and click on the AppImage. This runs a script that makes all required settings. This is all!
No root permissions are required. 


# switch local folder 


/home/harryji/Desktop/uivision