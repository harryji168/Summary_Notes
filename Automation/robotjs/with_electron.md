
# d:\prj is my workspace, you can change it to your own 
# for new project: init it firstly, then npm will generate package.json here 
# for existing project: just ignore the following direction 👇
D:\prj> npm init 

# clone this repo in prj 
D:\prj> git clone git@github.com:octalmage/robotjs.git

D:\prj> cd robotjs

D:\prj\robotjs> npm install
# npm install will install electron-1.8.8, 
# I think we can also install the last version

# more info: http://robotjs.io/docs/electron
D:\prj\robotjs> node-gyp rebuild --runtime=electron --target=6.0.7 --disturl=https://atom.io/download/atom-shell --abi=73  

# also you may meet errors abot "nan varibles not defined", execute npm install nan will solve it

# of course, we should replace '\' by '/' in *nix
D:\prj\robotjs> cd ..\

# install local module in nodejs
D:\prj> npm i -D .\robotjs
# then it will add dependencies in package.json
# "devDependencies": {
#   "robotjs": "file:robotjs"
# },


https://github.com/octalmage/robotjs/issues/503