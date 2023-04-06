Deploying a Build to GitHub Pages
You might want to deploy your newly completed app to GitHub pages, a static site host. Assuming you've already created a repository and committed to master, using the steps below...
git init
git remote add origin https://github.com/username/vue-app
git add .
git commit -m "initial commit"
git push -u origin master
You can commit the build with the following steps:

Create a gh-pages branch.

git checkout -b gh-pages
Remove the dist directory from .gitignore.

Create vue.config.js and add the publicPath of your GitHub

vue.config.js
module.exports = {
  publicPath: 'vue-app',
}
Create a build, which will output the dist folder.

npm run build
# or
yarn build
Add the build, commit, and send it to gh-pages on GitHub.

git add dist
git commit -m "gh-pages commit"
git subtree push --prefix dist origin gh-pages
And within a minute or two, it should be all hosted!

