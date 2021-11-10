# nodemon not found in npm


I have a problem: nodemon does not run off the npm script (e.g. npm start),
but if nodemon is called on the command line outside the npm script, nodemon runs as normal.


128

You can resolve this problem by adding nodemon to your package.json:

npm install nodemon --save-dev
The problem happens when nodemon does not exist in /node_modules/.bin.

Added --save-dev since it's required during development only.


https://stackoverflow.com/questions/28517494/nodemon-not-found-in-npm


-bash: sequelize: command not found

```
npm install -g sequelize-cli
```
