diffpdf

https://installati.one/ubuntu/20.04/diffpdf/


sudo apt-get update

sudo apt -y install diffpdf



dpkg: error: parsing file '/var/lib/dpkg/updates/0045' near line 0:
https://askubuntu.com/questions/213460/dpkg-error-parsing-file-var-lib-dpkg-updates-0045-near-line-0

sudo rm -rf /var/lib/dpkg/updates/*
dpkg --configure -a