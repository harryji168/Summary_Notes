https://linuxize.com/post/how-to-install-yarn-on-ubuntu-20-04/


curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
CopyCopy
Once the repository is enabled, update the package list, and install Yarn.

sudo apt update
sudo apt install yarn
CopyCopy
The command above will also install Node.js . If you installed Node trough nvm, skip the Node.js installation with:

sudo apt install --no-install-recommends yarn
Copy
Once completed, verify the installation by printing the Yarn version:

yarn --version