# JS: Webpack Basics

## Contents

- [JS: Webpack Basics](#js-webpack-basics)
  - [Contents](#contents)
  - [Introduction](#introduction)
  - [Getting Started](#getting-started)
  - [Create a Project for webpack(1)](#create-a-project-for-webpack1)
  - [First Build with Webpack(2)](#first-build-with-webpack2)
  - [Demo: Explore the Distribution](#demo-explore-the-distribution)
  - [Using Modules](#using-modules)
    - [Demo: Import/Export Logs](#demo-importexport-logs)
  - [Core Concepts & Configuration](#core-concepts--configuration)
    - [Demo: Create Initial Config](#demo-create-initial-config)
    - [Demo: Add Build Scripts](#demo-add-build-scripts)
    - [Webpack Concepts](#webpack-concepts)
      - [Demo: Change the Entry](#demo-change-the-entry)
      - [Demo: Install HTMLWebpackPlugin](#demo-install-htmlwebpackplugin)
      - [Demo: Loading Images](#demo-loading-images)
      - [Demo: Setup webpack-dev-server](#demo-setup-webpack-dev-server)
      - [Demo: Loading CSS](#demo-loading-css)
  - [Using Babel & React](#using-babel--react)
    - [Demo: Installing Babel](#demo-installing-babel)
    - [Demo: Using React](#demo-using-react)

## Introduction

Webpack is a static module bundler which means it happens before runtime (i.e. compile time). It doesn't cost any computing resources (e.g. memory, cpu, etc) at runtime. <br />

**Module**s break up code into small discrete chunks of functionality, each one has a smaller surface, making verification, debugging and testing easier. **Bundling** is combining all modules into one (or more) files for distribution.

<img src="./webpack.png" />

Webpack is currently at version 4, it is mature and widely used

## Getting Started

Install `webpack` and `webpack-cli` globally by running the following command in your terminal:

```bash
npm install -g webpack webpack-cli
```

## Create a Project for webpack(1)

```bash
# Create an npm project for webpack
mkdir webpack_demo
cd webpack_demo
npm init
```

Then install webpack locally

```bash
npm install --save-dev webpack webpack-cli
```

`Note: By default webpack will look for a file with path src/index.js`

## First Build with Webpack(2)

- Make a new directory (src) inside your project and add `index.js` file to it

```js
// src/index.js
console.log("Hello, World from Webpack");
```

- Then run `webpack` command in your terminal which a part of the `webpack-cli` package

```bash
webpack
```

That will create a file at `./dist/main.js` which is the bundle. It combines all modules into one file, which is the file your program needs to execute.<br />
We edit `./src/index.js` and we execute `./dist/main.js`

## Demo: Explore the Distribution

Open `./dist/main.js` in Visual Studio Code. <br />
What is inside? <br />
Webpack adds a fair amount of JavaScript to make this bundling possible. This file is not meant to be written to or read.

## Using Modules

Webpack modules make use of `import`/`export` statements

### Demo: Import/Export Logs

📺 Create two new files in `./src` import one and don't import the other. Look at the final bundle. <br />
Bundle it with **webpack** by running `webpack` command in your terminal in development mode.<br />
Was one ignored?

- Create two files `a.js` and `b.js`

```js
// src/a.js
console.log("This is a");
```

```js
// src/b.js
console.log("This is b");
```

- Then update `index.js` to:

```js
// src/index.js
import "./a.js";
console.log("Hello, World from Webpack");
```

We can tell webpack to auto-build if any file it bundles changes by adding `watch` flag when we run `webpack`

```bash
webpack --mode=development --watch
# Then try changing something in './src/index.js' after running the above command
# What happens in the logs?
```

## Core Concepts & Configuration

### Demo: Create Initial Config

Create `webpack.config.js` this will be our initial config file. Set the `mode` to `development`. <br />
Use it with the `webpack` command.

- Add `webpack.config.js` to the root directory of your project

```js
// webpack.config.js
module.exports = {
  mode: "development"
};
```

### Demo: Add Build Scripts

In `package.json`, create two build scripts.<br />
Add the script `build` which builds using our config files.<br />
Add the script `build:watch` which auto-builds using our config file.

- Update `package.json` to:

```json
// package.json
{
  "name": "js-webpack",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "start": "npm run build && node dist/main.js",
    "build": "webpack",
    "build:watch": "webpack --watch"
  },
  "author": "",
  "license": "ISC",
  "devDependencies": {
    "webpack": "^4.41.0",
    "webpack-cli": "^3.3.9"
  }
}
```

### Webpack Concepts

- Entry (Indicates which module webpack should use to begin building)
  check out https://webpack.js.org/concepts/#entry to learn more about entry points
- Output (Tells webpack where to output bundles it generates from entry and how to name them)
  check out https://webpack.js.org/concepts/#output to learn more about output property
- Loaders (Helping webpack understand other file types other than `js` & `json` which webpack already understand)
  check out https://webpack.js.org/concepts/#loaders to learn more about loaders
- Plugins (optimizing bundles, asset management and injection of environment variables)
  check out https://webpack.js.org/concepts/#plugins to learn more about webpack plugins
- Mode (Specifies the mode (either `development` or `production`) the default is `production` if you specify none)
  check out https://webpack.js.org/configuration/mode/ to learn more about mode configuration
- Browser Compatibility
  > webpack supports all browsers that are ES5-compliant (IE8 and below are not supported). webpack needs Promise for import() and require.ensure(). If you want to support older browsers, you will need to load a polyfill before using these expressions. [Browser Compatibility](https://webpack.js.org/concepts/#browser-compatibility)
- Environment
  > webpack runs on Node.js version 8.x and higher. [Webpack Environment](https://webpack.js.org/concepts/#environment)

#### Demo: Change the Entry

📺 Create `webpack.config.js`. This will be our initial config file. <br />

- Change the `entry` point
- Change the `output` as well

Update `webpack.config.js` to:

```js
// webpack.config.js
const path = require("path");

module.exports = {
  mode: "development",
  // You can specify a path to an "entry" file in multiple ways.
  // An "entry" is the file where webpack begins
  // bundling all of you modules.
  // For a single entry, write:
  // entry: "./src/client.js"
  // For multiple entry files bundle into a single file, use an array:
  // entry: ["./src/client.js", "./src/defaults.js"]
  // To create multiple bundles from separate entry files, use an object:
  entry: {
    // Create a bundle "./dist/client.js" (named after the key)
    clinet: "./src/client.js",
    // Create a bundle "./dist/defaults.js" (named after the key)
    defaults: "./src/defaults.js",
    server: "./src/defaults.js"
  },
  output: {
    // The "path" property is used to specify the location where
    // our bundled files are created. By default, it is
    // path.join(__dirname, "build"),
    path: path.join(__dirname, "build"),
    // The "filename" property is used to change
    // the names of the bundled files.
    filename: "[name].bundle.js"
  }
};
```

Then rename `index.js` to `client.js`<br />

And finally create `defaults.js` since we are specifying it as an entry in webpack configuration file:

```js
// src/defaults.js
console.log("Loading defaults...");
```

`Note: Webpack can only process JavaScript and JSON files, unless we introduce loaders`<br />
**Loaders** are usually installed as an `NPM` package. They can be used to process `CSS`, `SASS`, `JSX`, files, images, templates, etc...<br />

`Note: Always install webpack, its tools, loaders, and plugins as development dependencies`

#### Demo: Install HTMLWebpackPlugin

📺 Install `HTMLWebpackPlugin` to create our webpage. <br />

```bash
# in terminal run:
npm install --save-dev html-webpack-plugin
```

Then update `webpack.config.js` to:

```js
// webpack.config.js
const path = require("path");
const HTMLWebpackPlugin = require("html-webpack-plugin");

// Entry Points
// https://webpack.js.org/concepts/entry-points

// Output
// https://webpack.js.org/concepts/output

// Plugins
// https://webpack.js.org/concepts/plugins

module.exports = {
  mode: "development",
  // You can specify a pth to an "entry" file in multiple ways.
  // An "entry" is the file where webpack begins
  // bundling all of you modules.
  // For a single entry, write:
  // entry: "./src/client.js"
  // For multiple entry files bundle into a single file, use an array:
  // entry: ["./src/client.js", "./src/defaults.js"]
  // To create multiple bundles from separate entry files, use an object:
  entry: {
    // Create a bundle "./dist/client.js" (named after the key)
    clinet: "./src/client.js",
    // Create a bundle "./dist/defaults.js" (named after the key)
    defaults: "./src/defaults.js",
    server: "./src/defaults.js"
  },
  output: {
    // The "path" property is used to specify the location where
    // our bundled files are created. By default, it is
    // path.join(__dirname, "build"),
    path: path.join(__dirname, "build"),
    // The "filename" property is used to change
    // the names of the bundled files.
    filename: "[name].bundle.js"
  },
  plugins: [
    new HTMLWebpackPlugin({
      title: "Webpack Demo", // <title>of the web page
      chunks: ["client"]
      // "chunks" tells webpack which bundles to include
      // in the html file.
    })
  ]
};
```

#### Demo: Loading Images

Use `file-loader` to allow you to `import` images from your JavaScript modules. <br />
Use it to put an image on the front page with only JavaScript.

- Install `file-loader` module

```bash
# In your terminal run:
npm install --save-dev file-loader
```

- Update `client.js` file to:

```js
// src/client.js
import myImage from "./images/yourImageName.extention";
// make sure to add image directory inside src directory with an image to load it above

console.log(myImage);

document.addEventListener("DOMContentLoaded", () => {
  const img = document.createElement("img");
  img.src = myImage;

  document.querySelector("body").append(img);
});
```

- Update `webpack.config.js` to:

```js
// webpack.config.js
const path = require("path");
const HTMLWebpackPlugin = require("html-webpack-plugin");

// Entry Points
// https://webpack.js.org/concepts/entry-points

// Output
// https://webpack.js.org/concepts/output

// Plugins
// https://webpack.js.org/concepts/plugins

module.exports = {
  mode: "development",
  // You can specify a pth to an "entry" file in multiple ways.
  // An "entry" is the file where webpack begins
  // bundling all of you modules.
  // For a single entry, write:
  // entry: "./src/client.js"
  // For multiple entry files bundle into a single file, use an array:
  // entry: ["./src/client.js", "./src/defaults.js"]
  // To create multiple bundles from separate entry files, use an object:
  entry: {
    // Create a bundle "./dist/client.js" (named after the key)
    clinet: "./src/client.js",
    // Create a bundle "./dist/defaults.js" (named after the key)
    defaults: "./src/defaults.js",
    server: "./src/defaults.js"
  },
  output: {
    // The "path" property is used to specify the location where
    // our bundled files are created. By default, it is
    // path.join(__dirname, "build"),
    path: path.join(__dirname, "build"),
    // The "filename" property is used to change
    // the names of the bundled files.
    filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.(png|jpg|gif|webp|svg)$/,
        // npm i -D file-loader
        loader: "file-loader",
        options: {
          outputPath: "images/"
        }
      }
    ]
  },
  plugins: [
    new HTMLWebpackPlugin({
      title: "Webpack Demo", // <title>of the web page
      chunks: ["client"]
      // "chunks" tells webpack which bundles to include
      // in the html file.
    })
  ]
};
```

#### Demo: Setup webpack-dev-server

📺 Setup webpack-dev-server for hot reloading

- Install `webpack-dev-server`:

```bash
# In your terminal run:
npm install --save-dev webpack-dev-server
```

- Then update `package.json` to:

```json
// package.json
{
  "name": "js-webpack",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "build": "webpack --mode=production",
    "start": "webpack-dev-server"
  },
  "author": "",
  "license": "ISC",
  "devDependencies": {
    "webpack": "^4.41.0",
    "webpack-cli": "^3.3.9",
    "webpack-dev-server": "^3.2.1"
  }
}
```

#### Demo: Loading CSS

Install and setup `style-loader` and `css-loader` to be able to import `CSS` from your JavaScript module. <br />

Use it to remove the `margin` from the `body` and set the background colour to `floralwhite`.

- Install `css-loader` & `style-loader`

```bash
# In your terminal run:
npm install --save-dev css-loader style-loader
```

- Then add configuration for both loaders to `webpack.config.js`:

```js
// webpack.config.js
const path = require("path");
const HTMLWebpackPlugin = require("html-webpack-plugin");

// Entry Points
// https://webpack.js.org/concepts/entry-points

// Output
// https://webpack.js.org/concepts/output

// Plugins
// https://webpack.js.org/concepts/plugins

module.exports = {
  mode: "development",
  // You can specify a pth to an "entry" file in multiple ways.
  // An "entry" is the file where webpack begins
  // bundling all of you modules.
  // For a single entry, write:
  // entry: "./src/client.js"
  // For multiple entry files bundle into a single file, use an array:
  // entry: ["./src/client.js", "./src/defaults.js"]
  // To create multiple bundles from separate entry files, use an object:
  entry: {
    // Create a bundle "./dist/client.js" (named after the key)
    clinet: "./src/client.js",
    // Create a bundle "./dist/defaults.js" (named after the key)
    defaults: "./src/defaults.js",
    server: "./src/defaults.js"
  },
  output: {
    // The "path" property is used to specify the location where
    // our bundled files are created. By default, it is
    // path.join(__dirname, "build"),
    path: path.join(__dirname, "build"),
    // The "filename" property is used to change
    // the names of the bundled files.
    filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.(png|jpg|gif|webp|svg)$/,
        // npm i -D file-loader
        loader: "file-loader",
        options: {
          outputPath: "images/"
        },
        {
          test: /\.css$/,
          use: [
            {
              loader: "style-loader"
            },
            {
              loader: "css-loader"
            }
          ]
        }
      }
    ]
  },
  plugins: [
    new HTMLWebpackPlugin({
      title: "Webpack Demo", // <title>of the web page
      chunks: ["client"]
      // "chunks" tells webpack which bundles to include
      // in the html file.
    })
  ]
};
```

- Then add `styles` directory to `src` and `main.css` to it:

```css
/* src/styles/main.css */
html {
  font-family: Helvetica, sans-serif;
}

* {
  font-family: inherit;
}

img {
  border-radius: 10px;
}
```

- And finally update `client.js` to import the style:

```js
// src/client.js
import myImage from "./images/yourImageName.extention";
// make sure to add image directory inside src directory with an image to load it above

console.log(myImage);

document.addEventListener("DOMContentLoaded", () => {
  const img = document.createElement("img");
  img.src = myImage;

  document.querySelector("body").append(img);
});
```

**NOTE:**

- `css-loader` allows you to import `CSS` from JavaScript files and import `CSS` from other `CSS` files
- `style-loader` takes all imported `CSS` and adds it to an `HTML` page inside of a `style` tag, it uses `DOM` manipulation

## Using Babel & React

To install babel run the following command in your terminal:

```bash
npm i --save-dev @babel/core babel-loader
```

So now everything is the same, we have to tell webpack to use `babel-loader` to process JavaScript files:

```js
// webpack.config.js
// ...top of the file
module: {
  rules: [
    {
      test: /\.(js|jsx)$/,
      exclude: /node_modules/,
      // There is no sense in having babel transform JS files
      // from the node_modules/ directory
      loader: "babel-loader"
    }
  ];
// ... rest of the file
```

### Demo: Installing Babel

📺 Install and setup webpack, babel for react.

- Create `.babelrc` inside root directory

```json
// .babelrc
{
  "presets": ["@babel/preset-env", "@babel/preset-react"]
}
```

- Then install babel presets and babel-loader

```bash
# In your terminal run:
npm install --save-dev @babel/core @babel/preset-env @babel/preset-react babel-loader
```

- Finally Add configuration for `babel-loader` to `webpack.config.js`

```js
// webpack.config.js
const path = require("path");
const HTMLWebpackPlugin = require("html-webpack-plugin");

// Entry Points
// https://webpack.js.org/concepts/entry-points

// Output
// https://webpack.js.org/concepts/output

// Plugins
// https://webpack.js.org/concepts/plugins

module.exports = {
  mode: "development",
  // You can specify a pth to an "entry" file in multiple ways.
  // An "entry" is the file where webpack begins
  // bundling all of you modules.
  // For a single entry, write:
  // entry: "./src/client.js"
  // For multiple entry files bundle into a single file, use an array:
  // entry: ["./src/client.js", "./src/defaults.js"]
  // To create multiple bundles from separate entry files, use an object:
  entry: {
    // Create a bundle "./dist/client.js" (named after the key)
    clinet: "./src/client.js",
    // Create a bundle "./dist/defaults.js" (named after the key)
    defaults: "./src/defaults.js",
    server: "./src/defaults.js"
  },
  output: {
    // The "path" property is used to specify the location where
    // our bundled files are created. By default, it is
    // path.join(__dirname, "build"),
    path: path.join(__dirname, "build"),
    // The "filename" property is used to change
    // the names of the bundled files.
    filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.(png|jpg|gif|webp|svg)$/,
        // npm i -D file-loader
        loader: "file-loader",
        options: {
          outputPath: "images/"
        },
        {
          test: /\.css$/,
          use: [
            {
              loader: "style-loader"
            },
            {
              loader: "css-loader"
            }
          ]
        },
        {
          test: /\.(js|jsx)$/,
          exclude: /node_modules/,
          // There is no sense in having babel transform JS files
          // from the node_modules/ directory
          loader: "babel-loader"
        }
      }
    ]
  },
  plugins: [
    new HTMLWebpackPlugin({
      title: "Webpack Demo", // <title>of the web page
      chunks: ["client"]
      // "chunks" tells webpack which bundles to include
      // in the html file.
    })
  ]
};
```

Now you are all set, you can use react!

### Demo: Using React

📺 Change `client.js` to a react component

- Install `react` & `react-dom` packages

```bash
npm install --save react react-dom
```

- Update `client.js` to:

```JSX
// src/client.js
import React from 'react';
import ReactDOM from 'react-dom';

import myImage from "./images/yourImageName.extention";
// make sure to add image directory inside src directory with an image to load it above

console.log(myImage);

// document.addEventListener("DOMContentLoaded", () => {
//   const img = document.createElement("img");
//   img.src = myImage;

//   document.querySelector("body").append(img);
// });

const App = () => {
  return (
    <main>
      <h1 style={{ fontFamily: "sans-serif" }}>Here's a picture!</h1>
      <img
        src={myImage}
        alt="Many Cats Many Arms"
        style={{
          borderRadius: "20px",
          filter: "blur(0px) sepia(1) hue-rotate(50deg)",
          height: "400px"
        }}
      />
    </main>
  );
};

document.addEventListener("DOMContentLoaded", () => {
  const root = document.createElement("div");
  document.body.append(root);

  ReactDOM.render(<App />, root);
});
```