https://lesscss.org/usage/
Command Line Usage
Compile .less files to .css using the command line

Heads up! If the command line isn't your thing, learn more about GUIs for Less.

Installing
Install with npm

npm install less -g
The -g option installs the lessc command available globally. For a specific version (or tag) you can add @VERSION after our package name, e.g. npm install less@2.7.1 -g.

Installing for Node Development
Alternatively, if you don't want to use the compiler globally, you may be after

npm i less --save-dev
This will install the latest official version of lessc in your project folder, also adding it to the devDependencies in your project's package.json.



Version
lessc -v
lessc --version