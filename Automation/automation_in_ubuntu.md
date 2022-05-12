
### xdotool
https://askubuntu.com/questions/1080967/automating-an-application-in-ubuntu

To control a GUI application from terminal commands, you may use tools like xdotool and xsel.


To control a GUI application from terminal commands, you may use tools like xdotool and xsel.

xdotool simulates key presses and mouse actions. You can thus write a script that will send keys and mouse clicks in sequence to the application, which will interact on these just as if you would have been using the keyboard and mouse yourself.

xsel or xclip are tools allowing you to retrieve or set the clipboard from the command line.

Just as an illustration and give a very first idea on how it works, following command would select a word before the cursor and cut it to the clipboard.

xdotool key ctrl+shift+Left ctrl+x

Your script could then retrieve the clipboard selection to do something with it:

SELECTION=$(xsel -b)

Some remarks:   

