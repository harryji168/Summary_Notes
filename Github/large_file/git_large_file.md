# https://git-lfs.github.com/


curl -s https://packagecloud.io/install/repositories/github/git-lfs/script.deb.sh | sudo bash

cd git-lfs-linux-amd64-v3.0.2
sudo chmod -R 777 ./install.sh
sudo ./install.sh
###
1. git lfs install

#####
2. git lfs track "*.pst"
git add .gitattributes

###
3. 
git add file.psd
git commit -m "Add design file"
git push origin main

#still have problem 

remote: error: File supere2021_3.pst is 508.34 MB; this exceeds GitHub's file size limit of 100.00 MB
remote: error: GH001: Large files detected. You may want to try Git Large File Storage - https://git-lfs.github.com

<<<<<<< HEAD
=======

# large file 
https://towardsdatascience.com/uploading-large-files-to-github-dbef518fa1a
>>>>>>> f44bf2f5b8891b7e38f6b4b5530111af328fe19f
