

https://imagemagick.org/script/download.php


Install ImageMagick in Ubuntu 20.04 LTS through apt
Installing ImageMagick through apt (Advanced Package Tool) is pretty straightforward. The package is already available in standard Ubuntu repository. Therefore, update the repository first. Open a terminal and issue the following –

sudo apt update
Next, to install ImageMagick –

sudo apt install imagemagick
It will install all the required dependencies as well. Lastly, to verify if its working –

convert logo: logo.gif
