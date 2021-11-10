# Command Line Interface (CLI)

# new windows -n


# -g goto file line



Core CLI options#
Here are optional arguments you can use when starting VS Code at the command line via code:

Argument	Description
-h or --help	Print usage
-v or --version	Print VS Code version (for example, 1.22.2), GitHub commit ID, and architecture (for example, x64).
-n or --new-window	Opens a new session of VS Code instead of restoring the previous session (default).
-r or --reuse-window	Forces opening a file or folder in the last active window.
-g or --goto	When used with file:line[:character], opens a file at a specific line and optional character position. This argument is provided since some operating systems permit : in a file name.
-d or --diff	Open a file difference editor. Requires two file paths as arguments.
-w or --wait	Wait for the files to be closed before returning.
--locale <locale>	Set the display language (locale) for the VS Code session. (for example, en-US or zh-TW)
