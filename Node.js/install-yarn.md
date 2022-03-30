https://www.ultimateakash.com/blog-details/IS1QYGAKYAo=/How-to-Install-Yarn-Package-on-Ubuntu-2021

How to Install Yarn Package on Ubuntu 2021
Yarn is a package manager that doubles down as project manager. Whether you work on one-shot projects or large monorepos, as a hobbyist or an enterprise user, we've got you covered.

Firstly you need to import the repository's GPG key by following the command.
```
curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
```
PHP
After that, you need to add the Yarn APT repository to your system’s software repository list by typing.
```
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
```
PHP
Once above process completed, update the package list, and install Yarn, with the following commands.
```
sudo apt update
sudo apt install yarn
```
PHP
after successful installation, run the following command which will print the Yarn version number.

yarn --version