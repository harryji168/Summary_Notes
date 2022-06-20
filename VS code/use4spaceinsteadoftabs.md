https://stackoverflow.com/questions/29972396/how-can-i-customize-the-tab-to-space-conversion-factor

By default, Visual Studio Code will try to guess your indentation options depending on the file you open.

You can turn off indentation guessing via "editor.detectIndentation": false.

You can customize this easily via these three settings for Windows in menu File → Preferences → User Settings and for Mac in menu Code → Preferences → Settings or ⌘,:

// The number of spaces a tab is equal to. This setting is overridden
// based on the file contents when `editor.detectIndentation` is true.
"editor.tabSize": 4,

// Insert spaces when pressing Tab. This setting is overriden
// based on the file contents when `editor.detectIndentation` is true.
"editor.insertSpaces": true,

// When opening a file, `editor.tabSize` and `editor.insertSpaces`
// will be detected based on the file contents. Set to false to keep
// the values you've explicitly set, above.
"editor.detectIndentation": false


900

+50
I'm running version 1.21, but I think this may apply to other versions as well.

Take a look at the bottom right-hand side of the screen. You should see something that says Spaces or Tab-Size.

Mine shows spaces, →

Enter image description here

Click on the Spaces (or Tab-Size)
Choose Indent Using Spaces or Indent using Tabs
Select the amount of spaces or tabs you like.
This only works per document, not project-wide. If you want to apply it project-wide, you need to also add "editor.detectIndentation": false to your user settings.