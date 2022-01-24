https://www.c-sharpcorner.com/blogs/a-guide-on-how-to-deploy-angular-applications-to-github-pages#:~:text=To%20deploy%20an%20Angular%20application%20to%20GitHub%20Pages%20you%20have,be%20deployed%20using%20GitHub%20Pages.

```
npm i angular-cli-ghpages --save-dev
ng build --prod --base-href https://harryji168.github.io/Angular-Typescript/
npx angular-cli-ghpages --dir=dist/angular-app
```