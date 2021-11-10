```
sudo electron-builder -wl
```
>mac onlu build under apple enviorment

commands:
  electron-builder build                    Build                      [default]
  electron-builder install-app-deps         Install app deps
  electron-builder node-gyp-rebuild         Rebuild own native code
  electron-builder create-self-signed-cert  Create self-signed code signing cert
                                            for Windows apps
  electron-builder start                    Run application in a development
                                            mode using electron-webpack

Building:
  --mac, -m, -o, --macos   Build for macOS, accepts target list (see
                           https://goo.gl/5uHuzj).                       [array]
  --linux, -l              Build for Linux, accepts target list (see
                           https://goo.gl/4vwQad)                        [array]
  --win, -w, --windows     Build for Windows, accepts target list (see
                           https://goo.gl/jYsTEJ)                        [array]
  --x64                    Build for x64                               [boolean]
  --ia32                   Build for ia32                              [boolean]
  --armv7l                 Build for armv7l                            [boolean]
  --arm64                  Build for arm64                             [boolean]
  --dir                    Build unpacked dir. Useful to test.         [boolean]
  --prepackaged, --pd      The path to prepackaged app (to pack in a
                           distributable format)
  --projectDir, --project  The path to project directory. Defaults to current
                           working directory.
  --config, -c             The path to an electron-builder config. Defaults to
                           `electron-builder.yml` (or `json`, or `json5`), see
                           https://goo.gl/YFRJOM

Publishing:
  --publish, -p  Publish artifacts (to GitHub Releases), see
                 https://goo.gl/tSFycD
                [choices: "onTag", "onTagOrDraft", "always", "never", undefined]

Other:
  --help     Show help                                                 [boolean]
  --version  Show version number                                       [boolean]


build for macOS, Windows and Linux
```
electron-builder -mwl
```

build deb and tar.xz for Linux

electron-builder --linux deb tar.xz

build NSIS 32-bit installer for Windows

electron-builder --windows nsis:ia32

set package.json property foo to bar

electron-builder -c.extraMetadata.foo=bar

configure unicode options for NSIS

electron-builder -c.nsis.unicode=false

  
  
  # Cannot find module 'dmg-license'


 # Please specify author 'email' in the application package.json
```
"author": "Harry Ji <jiharry@hotmail.com>",
```
  https://github.com/cafeparadox/laser/issues/1