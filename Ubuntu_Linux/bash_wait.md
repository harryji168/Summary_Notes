https://linuxize.com/post/bash-wait/#examples

#!/bin/bash
sleep 30 &
process_id=$!
echo "PID: $process_id"
wait $process_id
echo "Exit status: $?"