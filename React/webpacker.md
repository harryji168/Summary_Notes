
``` install global
npm install -g webpack webpack-cli
```


mkdir webpack_demo
cd webpack_demo
npm init


```
npm i -D webpack webpack-cli
```

```
webpack
```

```
npm i -D file-loader
```
```
npm i -D webpack-dev-server
```

npm i -D @babel/core babel-loader
npm i -D @babel/preset-env




const App = () => {
    return (
        <div>
            <h1>Here's a picture</h1>
            <img src={cat} alt="" srcset="" />
        </div>
    )
}

document.addEventListener("DOMContentLoaded", () => {
    const root = document.createElement("div");
    root.id = "root";
    document.body.append(root);

    ReactDOM.render(<App />, root);
})


const path = require("path");
const HTMLWebpackPlugin = require("html-webpack-plugin");

module.exports = {
    mode: "development",
    // Then entry is the file where webpack begins to bundle your files
    // you can specify a path to an "entry" file in multiple ways:
    // single entry
    // entry: "./src/a.js"'
    // for multiple entry files bundle into one file, use an array
    // entry: ["./src/a.js", "./src/b.js"]
    // To create multiple bundles from separate entry files, use an object
    entry: {
        client: "./src/index.js",
        ajs: "./src/a.js",
        bjs: "./src/b.js"
    },
    output: {
        path: path.join(__dirname, "build"),
        filename: "[name].bundle.js"
    },
    module: {
        rules: [
            {
                test: /\.(png|jpg|gif|webp|svg)$/,
                loader: "file-loader",
                options: {
                    outputPath: "images/",
                    name: '[name].[ext]'
                }
            },
            {
                test: /\.css$/,
                use: [
                    { loader: "style-loader" },
                    { loader: "css-loader" }
                ]
            },
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                loader: "babel-loader"
            }
        ]
    },
    plugins: [
        new HTMLWebpackPlugin(
            {
                title: "Webpack Demo",
                chunks: ["client"]
            }
        )
    ]
}