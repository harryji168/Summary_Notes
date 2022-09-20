# sound beep for testing
```
( speaker-test -t sine -f 1000 )& pid=$! ; sleep 0.1s ; kill -9 $pid
```

https://unix.stackexchange.com/questions/1974/how-do-i-make-my-pc-speaker-beep