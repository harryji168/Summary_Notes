https://stackoverflow.com/questions/55997850/error-in-running-nuxt-project-nuxt-is-not-recognized-as-an-internal-or-exter

12

Make sure nuxt is installed in your Nuxt project:

$ cd /path/to/nuxt-project
$ npm list nuxt
nuxt-project@1.0.0 /path/to/nuxt-project
└── nuxt@2.6.3 
Here /path/to/nuxt-project contains your package.json and node-modules.

If it isn't installed, add nuxt to your project by doing:

npm install --save nuxt



## https://stackoverflow.com/questions/37324519/node-sass-does-not-yet-support-your-current-environment-linux-64-bit-with-false


--unsafe-perm

error /home/harryji/nuxt/blog/node_modules/node-sass: Command failed.


https://stackoverflow.com/questions/60394291/error-node-modules-node-sass-command-failed