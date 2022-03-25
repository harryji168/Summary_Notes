https://askubuntu.com/questions/786145/how-to-copy-a-website-completely-offline

Simplest way to do it is to open a Terminal window and type:

wget -mkEpnp http://example.org  
or a detailed version

wget --mirror --convert-links --adjust-extension --page-requisites 
--no-parent http://example.org