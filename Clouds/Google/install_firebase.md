https://bobbyhadz.com/blog/npm-command-not-found-firebase#:~:text=To%20solve%20the%20error%20%22firebase,in%20your%20system's%20environment%20variable.

shell

# 👇️ install firebase cli globally
npm install -g firebase-tools

# 👇️ get package version
firebase --version

firebase help


Usage: firebase [options] [command]

Options:
  -V, --version                                               output the version number
  -P, --project <alias_or_project_id>                         the Firebase project to use for this command
  --account <email>                                           the Google account to use for authorization
  -j, --json                                                  output JSON instead of text, also triggers non-interactive mode
  --token <token>                                             supply an auth token for this command
  --non-interactive                                           error out of the command instead of waiting for prompts
  -i, --interactive                                           force prompts to be displayed
  --debug                                                     print verbose debug output and keep a debug log file
  -c, --config <path>                                         path to the firebase.json file to use for configuration
  -h, --help                                                  output usage information

Commands:
  appdistribution:distribute [options] <release-binary-file>  upload a release binary
  appdistribution:testers:add [options] [emails...]           add testers to project
  appdistribution:testers:remove [options] [emails...]        remove testers from a project
  apps:create [options] [platform] [displayName]              create a new Firebase app. [platform] can be IOS, ANDROID or WEB (case insensitive).
  apps:list [platform]                                        list the registered apps of a Firebase project. Optionally filter apps by [platform]: IOS, ANDROID or WEB (case insensitive)
  apps:sdkconfig [options] [platform] [appId]                 print the Google Services config of a Firebase app. [platform] can be IOS, ANDROID or WEB (case insensitive)
  apps:android:sha:list <appId>                               list the SHA certificate hashes for a given app id. 
  apps:android:sha:create <appId> <shaHash>                   add a SHA certificate hash for a given app id.
  apps:android:sha:delete <appId> <shaId>                     delete a SHA certificate hash for a given app id.
  auth:export [options] [dataFile]                            Export accounts from your Firebase project into a data file
  auth:import [options] [dataFile]                            import users into your Firebase project from a data file(.csv or .json)
  crashlytics:symbols:upload [options] <symbolFiles...>       Upload symbols for native code, to symbolicate stack traces.
  database:get [options] <path>                               fetch and print JSON data at the specified path
  database:instances:create [options] <instanceName>          create a realtime database instance
  database:instances:list                                     list realtime database instances, optionally filtered by a specified location
  database:profile [options]                                  profile the Realtime Database and generate a usage report
  database:push [options] <path> [infile]                     add a new JSON object to a list of data in your Firebase
  database:remove [options] <path>                            remove data from your Firebase at the specified path
  database:set [options] <path> [infile]                      store JSON data at the specified path via STDIN, arg, or file
  database:settings:get [options] <path>                      read the realtime database setting at path
  database:settings:set [options] <path> <value>              set the realtime database setting at path.
  database:update [options] <path> [infile]                   update some of the keys for the defined path in your Firebase
  deploy [options]                                            deploy code and assets to your Firebase project
  emulators:exec [options] <script>                           start the local Firebase emulators, run a test script, then shut down the emulators
  emulators:export [options] <path>                           export data from running emulators
  emulators:start [options]                                   start the local Firebase emulators
  experimental:functions:shell [options]                      launch full Node shell with emulated functions. (Alias for `firebase functions:shell.)
  ext                                                         display information on how to use ext commands and extensions installed to your project
  ext:configure [options] <extensionInstanceId>               configure an existing extension instance
  ext:info [options] <extensionName>                          display information about an extension by name (extensionName@x.y.z for a specific version)
  ext:export [options]                                        export all Extension instances installed on a project to a local Firebase directory
  ext:install [options] [extensionName]                       install an official extension if [extensionName] or [extensionName@version] is provided; or run with `-i` to see all available extensions.
  ext:list                                                    list all the extensions that are installed in your Firebase project
  ext:uninstall [options] <extensionInstanceId>               uninstall an extension that is installed in your Firebase project by instance ID
  ext:update [options] <extensionInstanceId> [updateSource]   update an existing extension instance to the latest version
  firestore:delete [options] [path]                           Delete data from Cloud Firestore.
  firestore:indexes [options]                                 List indexes in your project's Cloud Firestore database.
  functions:config:clone [options]                            clone environment config from another project
  functions:config:export                                     Export environment config as environment variables in dotenv format
  functions:config:get [path]                                 fetch environment config stored at the given path
  functions:config:set [values...]                            set environment config with key=value syntax
  functions:config:unset [keys...]                            unset environment config at the specified path(s)
  functions:delete [options] [filters...]                     delete one or more Cloud Functions by name or group name.
  functions:log [options]                                     read logs from deployed functions
  functions:shell [options]                                   launch full Node shell with emulated functions
  functions:list                                              list all deployed functions in your Firebase project
  functions:secrets:access <KEY>[@version>                    Access secret value given secret and its version. Defaults to accessing the latest version.
  functions:secrets:destroy [options] <KEY>[@version>         Destroy a secret. Defaults to destroying the latest version.
  functions:secrets:get <KEY>                                 Get metadata for secret and its versions
  functions:secrets:prune [options]                           Destroys unused secrets
  functions:secrets:set [options] <KEY>                       Create or update a secret for use in Cloud Functions for Firebase.
  help [command]                                              display help information
  hosting:channel:create [options] [channelId]                create a Firebase Hosting channel
  hosting:channel:delete [options] <channelId>                delete a Firebase Hosting channel
  hosting:channel:deploy [options] [channelId]                deploy to a specific Firebase Hosting channel
  hosting:channel:list [options]                              list all Firebase Hosting channels for your project
  hosting:channel:open [options] [channelId]                  opens the URL for a Firebase Hosting channel
  hosting:clone <source> <targetChannel>                      clone a version from one site to another
  hosting:disable [options]                                   stop serving web traffic to your Firebase Hosting site
  hosting:sites:create [options] [siteId]                     create a Firebase Hosting site
  hosting:sites:delete [options] <siteId>                     delete a Firebase Hosting site
  hosting:sites:get <siteId>                                  print info about a Firebase Hosting site
  hosting:sites:list                                          list Firebase Hosting sites
  init [feature]                                              Interactively configure the current directory as a Firebase project or initialize new features in an already configured Firebase project directory.
  
  This command will create or update 'firebase.json' and '.firebaserc' configuration files in the current directory. 
  
  To initialize a specific Firebase feature, run 'firebase init [feature]'. Valid features are:
  
    - database
    - emulators
    - firestore
    - functions
    - hosting
    - hosting:github
    - remoteconfig
    - storage
  login [options]                                             log the CLI into Firebase
  login:add [options] [email]                                 authorize the CLI for an additional account
  login:ci [options]                                          generate an access token for use in non-interactive environments
  login:list                                                  list authorized CLI accounts
  login:use <email>                                           set the default account to use for this project directory
  logout [email]                                              log the CLI out of Firebase
  open [link]                                                 quickly open a browser to relevant project resources
  projects:addfirebase [projectId]                            add Firebase resources to a Google Cloud Platform project
  projects:create [options] [projectId]                       creates a new Google Cloud Platform project, then adds Firebase resources to the project
  projects:list                                               list all Firebase projects you have access to
  remoteconfig:get [options]                                  get a Firebase project's Remote Config template
  remoteconfig:rollback [options]                             roll back a project's published Remote Config template to the one specified by the provided version number
  remoteconfig:versions:list [options]                        get a list of Remote Config template versions that have been published for a Firebase project
  serve [options]                                             start a local server for your static assets
  setup:emulators:database                                    downloads the database emulator
  setup:emulators:firestore                                   downloads the firestore emulator
  setup:emulators:pubsub                                      downloads the pubsub emulator
  setup:emulators:storage                                     downloads the storage emulator
  setup:emulators:ui                                          downloads the ui emulator
  target [type]                                               display configured deploy targets for the current project
  target:apply <type> <name> <resources...>                   apply a deploy target to a resource
  target:clear <type> <target>                                clear all resources from a named resource target
  target:remove <type> <resource>                             remove a resource target
  use [options] [alias_or_project_id]                         set an active Firebase project for your working directory

  To get help with a specific command, type firebase help [command_name]