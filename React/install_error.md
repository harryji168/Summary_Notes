The react-scripts package provided by Create React App requires a dependency:

There might be a problem with the project dependency tree. It is likely not a bug in Create React App, but something you need to fix locally.

The react-scripts package provided by Create React App requires a dependency:

"babel-eslint": "9.0.0"

Don't try to install it manually: your package manager does it automatically. However, a different version of babel-eslint was detected higher up in the tree:

javascript
reactjs
react-native
react-redux
react-router
Share
Follow
edited Jan 2 '19 at 8:55
asked Jan 2 '19 at 1:33
user10154568
Hi, have you tried the steps suggested in the error message? – 
krisaoe
 Jan 2 '19 at 7:08
yeah but i get the same shit error – 
user10154568
 Jan 2 '19 at 7:48
1
Same here, problems with webpack and babel-eslint, trying downgrading react-scripts from 2.1.2 to 2.1.1 didn't work, there is a issue open on GitHub here: github.com/facebook/react/issues/14518 – 
Urko Pineda
 Jan 2 '19 at 11:21 
Hey @Chawki_726 , try using npm ls babel-eslintand check what package is downgrading or upgrading bable-eslint. I have the same issue but with webpack and react-recaptcha-v3 package has introduced the issue for me. – 
Urko Pineda
 Jan 2 '19 at 11:27
i solve the issue by deleting the global babel-eslint – 
user10154568
 Jan 3 '19 at 15:22
Add a comment
11 Answers

31

create .env file in your project file and add the following statement

SKIP_PREFLIGHT_CHECK=true
Save the file

Remove node_modules, yarn.lock, package.lock

Then reinstall node_modules with

npm install
This should work

Share
Follow



###### Attempted import error: 'Switch' is not exported from 'react-router-dom'


178

In react-router-dom v6, "Switch" is replaced by routes "Routes". You need to update the import from

import { Switch, Route } from "react-router-dom";
to

import { Routes ,Route } from 'react-router-dom';



https://stackoverflow.com/questions/67687254/attempted-import-error-switch-is-not-exported-from-react-router
4

The package you need is react-router-dom:

Install the package(s)
npm install react-router-dom

Since you are using TypeScript, also install the type definitions:

npm install @types/react-router-dom


### ./src/app/components/Breadcrumb/Breadcrumb.jsx  --not work 
Module not found: Empty dependency (no request)

Use the latest version.

Version 4.6.1 Solve the problem.

Share
Improve this answer


###  https://www.npmjs.com/package/react-breadcrumbs  ## nowowrking

npm install --save react-breadcrumbs


https://mui.com/components/breadcrumbs/

## install 
https://mui.com/getting-started/installation/

npm install @mui/material @emotion/react @emotion/styled