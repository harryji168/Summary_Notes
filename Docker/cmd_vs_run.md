https://www.geeksforgeeks.org/difference-between-run-vs-cmd-vs-entrypoint-docker-commands/#:~:text=A%20CMD%20command%20is%20used,the%20last%20one%20gets%20executed.

 To get a clearer picture, look at the commands below.

RUN apt-get -y install firefox
CMD echo "GeeksforGeeks"
ENTRYPOINT echo "GeeksforGeeks"
Both the above commands outputs “GeeksforGeeks”. The shell form of execution commands is generally used for RUN commands.

 Executable Form:
Executable form of commands is generally used for CMD and ENTRYPOINT commands. The general form of executable commands is as shown below: