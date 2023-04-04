offline 

wget --mirror -p --convert-links -P ./LOCAL-DIR WEBSITE-URL

–mirror : turn on options suitable for mirroring.

-p : download all files that are necessary to properly display a given HTML page.

--convert-links : after the download, convert the links in document for local viewing.

-P ./LOCAL-DIR : save all the files and directories to the specified directory.



https://askubuntu.com/questions/20463/how-can-i-download-an-entire-website


https://askubuntu.com/questions/786145/how-to-copy-a-website-completely-offline

wget -mkEpnp http://example.org  


Simplest way to do it is to open a Terminal window and type:

wget -mkEpnp http://example.org  
or a detailed version

wget --mirror --convert-links --adjust-extension --page-requisites 
--no-parent http://example.org