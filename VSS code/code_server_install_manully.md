# manual install  version 3.12.0   code-server-3.12.0-linux-amd64.tar.gz

mkdir -p ~/.local/lib ~/.local/bin
curl -fL https://github.com/cdr/code-server/releases/download/v3.12.0/code-server-3.12.0-linux-amd64.tar.gz   | tar -C ~/.local/lib -xz
mv ~/.local/lib/code-server-3.12.0-linux-amd64 ~/.local/lib/code-server-3.12.0
ln -s ~/.local/lib/code-server-3.12.0/bin/code-server ~/.local/bin/code-server
PATH="~/.local/bin:$PATH"
code-server

# check default password
```
cat ~/.config/code-server/config.yaml
```

![Screenshot from 2021-10-23 09-36-15](https://user-images.githubusercontent.com/21187699/138564501-d391fccb-95df-4d84-9027-b4d1c98c6a11.png)



# Now visit http://127.0.0.1:8080. Your password is in ~/.config/code-server/config.yaml

![Screenshot from 2021-10-23 09-36-59](https://user-images.githubusercontent.com/21187699/138564524-ac4ea868-0d97-42ae-bbc0-e4625d10d612.png)




# login code server
![Screenshot from 2021-10-23 09-43-28](https://user-images.githubusercontent.com/21187699/138564725-d3484754-9e48-4593-a691-97bbce6cf558.png)


# backup





# AUTO INSTALL
If you use the install script, you can preview what occurs during the install process:
```sh
curl -fsSL https://code-server.dev/install.sh | sh -s -- --dry-run
```
To install, run:
```sh
curl -fsSL https://code-server.dev/install.sh | sh
```

![Screenshot from 2021-10-14 10-41-03](https://user-images.githubusercontent.com/21187699/137368750-c3f60b3f-d2df-4fec-9c69-64d65cae35b5.png)



To have systemd start code-server now and restart on boot:
```sh
  sudo systemctl enable --now code-server@$USER
```  
Or, if you don't want/need a background service you can run:
```sh
  code-server
```

![Screenshot from 2021-10-14 10-44-31](https://user-images.githubusercontent.com/21187699/137369193-6960579a-f7a2-406f-b50a-0f1caebda3b9.png)


# config file
```
code ~/.config/code-server/config.yaml
```
``` change password
bind-addr: 127.0.0.1:8080
auth: password
password: 123
cert: false
```


SSH into your instance and edit the code-server config file to disable password authentication:

# Replaces "auth: password" with "auth: none" in the code-server config.
sed -i.bak 's/auth: password/auth: none/' ~/.config/code-server/config.yaml
Restart code-server:

```sh
sudo systemctl restart code-server@$USER
```


![Screenshot from 2021-10-14 10-50-28](https://user-images.githubusercontent.com/21187699/137370062-d584bf11-4939-47e3-b62b-8e146cba4ad4.png)