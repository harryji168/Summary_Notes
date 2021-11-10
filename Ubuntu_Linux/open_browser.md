rom: Terminal command to open URL's in default and non-default browser (which I don't think is a duplicate)

If you want to open Chrome to a specific URL, just run

google-chrome www.example.com
To open your default browser to a specific URL, run

xdg-open www.example.com  
If you need to run Chrome and close the terminal window afterward, run

google-chrome http://www.google.com </dev/null >/dev/null 2>&1 & disown
>/dev/null 2>&1 will prevent messages from the browser to be outputted to the terminal's window; & will put the process into the background and disown will remove the job / process from the job list, preventing a SIGHUP signal to be propagated to it.

To do this with another browser simply replace google-chrome with that other browser's

https://askubuntu.com/questions/682542/is-there-a-way-to-open-browser-using-terminal