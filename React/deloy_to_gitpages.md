
https://www.freecodecamp.org/news/deploy-a-react-app-to-github-pages/

Now, we can push all our project's files to our repository.

In order for us to be able to upload our built application to GitHub Pages, we first need to install the gh-pages package.

yarn add gh-pages
This package will help us to deploy our code to the gh-pages branch which will be used to host our application on GitHub Pages.

To allow us to use the gh-pages package properly, we need to add two keys to our scripts value in the package.json file:

"scripts": {
    "start": "react-scripts start",
    "predeploy": "npm run build", <----------- #1
    "deploy": "gh-pages -d build", <---------- #2
    "build": "react-scripts build",
    "test": "react-scripts test",
    "eject": "react-scripts eject"
  },
Next, we need to modify our package.json file by adding the homepage field. This field is used by React to figure out the root URL in the built HTML file. In it, we will put the URL of our GitHub repository.

{
  "name": "starter-project",
  "homepage": "https://harryji168.github.io/harryji.com/", <----
  "version": "0.1.0",
  /....
}
To deploy our application, type the following in the terminal:

npm run deploy
Running the command above takes care of building your application and pushing it to a branch called gh-pages, which GitHub uses to link with GitHub Pages.

🚧 If you did not name your remote origin, you will get an error during this phase stating that: Failed to get remote.origin.url (task must either be run in a git repository with a configured origin remote or must be configured with the "repo" option).
You will know that the process was successful if at the end of it you see the word Published. We can now head to our GitHub repository under Settings and scroll down to the GitHub Pages section.

https://www.heroku.com/pricing