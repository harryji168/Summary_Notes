# Install NodeJS on Ubuntu 20.04
```
curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -
```

```
sudo apt install -y nodejs
```
```
node -v
```
```
curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
```
```
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
```
```
sudo apt-get update && sudo apt-get install yarn