# This tool lets you simulate keyboard input and mouse activity, move and resize windows, etc. It does this using X11's XTEST extension and other Xlib functions.


http://manpages.ubuntu.com/manpages/trusty/man1/xdotool.1.html


```
xdotool type "Hello world"
```

/  const { exec } = require("child_process");
    exec('xdotool getactivewindow windowmove 3500 1600', (error, stdout, stderr) => {
      if (error) {
          console.log(`error: ${error.message}`);
          return;
      }
      if (stderr) {
          console.log(`stderr: ${stderr}`);
          return;
      }
      console.log(`stdout: ${stdout}`);
    });




https://www.semicomplete.com/projects/xdotool/

https://github.com/jordansissel/xdotool/releases


http://manpages.ubuntu.com/manpages/impish/man1/xdotool.1.html#window%20commands