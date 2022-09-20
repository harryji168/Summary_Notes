# sound beep for testing
```
( speaker-test -t sine -f 1000 )& pid=$! ; sleep 0.1s ; kill -9 $pid
```


const { exec } = require("child_process");
exec("( speaker-test -t sine -f 1000 )& pid=$! ; sleep 0.1s ; kill -9 $pid", (error, stdout, stderr) => {
    if (error) {
        console.log(`error: ${error.message}`);
        return;
    }
    if (stderr) {
        console.log(`stderr: ${stderr}`);
        return;
    }
    console.log(`stdout: ${stdout}`);
})

https://unix.stackexchange.com/questions/1974/how-do-i-make-my-pc-speaker-beep