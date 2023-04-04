# sound-play

Dead simple sound player for Node -- because it should be simple.

const sound = require("sound-play");
sound.play("file.mp3");
Support .wav, .mp3 and other extensions.

# Work on Windows and MacOS


sound.play("file.mp3").then((response) => console.log("done"));



# ubuntu 



Yes you can do it with many commandline tools like mpg123, aplay , cvlc and mplayer, but I suggest the play command. To install it:
```
sudo apt install sox
```
And for playing special formats like mp3 you must install its libraries:
```
sudo apt install libsox-fmt-mp3
```
And to use it:

play music.mp3
If you want to use it with full libraries, you must install libsox-fmt-all package:

sudo apt install libsox-fmt-all


https://askubuntu.com/questions/920539/how-do-you-play-a-sound-from-the-terminal