

https://stackoverflow.com/questions/28340877/how-to-change-port-number-for-jenkins-installation-in-ubuntu-12-04



First open the /etc/default/jenkins file.
Then under JENKINS_ARGS section, you can change the port like this HTTP_PORT=9999.

Then you should restart Jenkins with sudo service jenkins restart.

Then to check the status use this command sudo systemctl status jenkins


Jenkins http://localhost:9999/