https://jestjs.io/docs/getting-started


yarn add --dev jest
Or npm:

npm install --save-dev jest
Note: Jest documentation uses yarn commands, but npm will also work. You can compare yarn and npm commands in the yarn docs, here.

Let's get started by writing a test for a hypothetical function that adds two numbers. First, create a sum.js file:

function sum(a, b) {
  return a + b;
}
module.exports = sum;


npm install jest --global