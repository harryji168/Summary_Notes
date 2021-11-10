# run shell command electron js

``` js
// You can use 'exec' this way

const { exec } = require("child_process");

exec("ls -la", (error, stdout, stderr) => {
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
```

https://www.codegrepper.com/code-examples/shell/run+shell+command+electron+js


