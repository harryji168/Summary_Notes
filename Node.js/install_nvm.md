# Installing NVM on Ubuntu

sudo apt install curl
curl https://raw.githubusercontent.com/creationix/nvm/master/install.sh | bash

source ~/.profile

```
nvm ls
```

nvm install node

https://tecadmin.net/how-to-install-nvm-on-ubuntu-20-04/

https://stackoverflow.com/questions/47190861/how-can-the-default-node-version-be-set-using-nvm

nvm alias default v16.13.1

nvm use default

nvm uninstall 17.8.0

```
curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
```

```
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
```

```
sudo apt-get update && sudo apt-get install yarn
```
