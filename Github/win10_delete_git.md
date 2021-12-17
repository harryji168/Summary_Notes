https://stackoverflow.com/questions/17369850/how-to-remove-git-repository-created-on-desktop

If you are a Comamnd Line Freak! You can also do it from your command prompt

Start --> Run

Type: cmd

Navigate to the folder of your project (ex: cd c:\myProject )

From the folder of your project you can type the following to be able to see the .git folder: attrib -s -h -r . /s /d

then you can just Delete the .git folder from the command line: del /F /S /Q /A .git

and rmdir .git