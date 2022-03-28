https://stackoverflow.com/questions/44965071/error-tserror-%E2%A8%AF-unable-to-compile-typescript

I had met same issue. First I remove ts-node and typescript from package.json. then,

npm install ts-node --save-dev
npm install typescript -g 
npm install typescript --save-dev

https://www.typescriptlang.org/download