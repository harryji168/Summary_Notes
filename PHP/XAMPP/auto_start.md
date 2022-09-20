https://shareablecode.com/snippets/how-to-auto-start-xampp-at-startup-in-ubuntu-x42e-2uBd

Run the following command.

sudo gedit /etc/systemd/system/xampp.service
This command, if already not created, creates a new file named  xampp.service  in the directory  /etc/systemd/system/  and opens it for editing.

In the opened file, add the following lines and save the file


 
[Unit]
Description=XAMPP

[Service]
ExecStart=/opt/lampp/lampp start
ExecStop=/opt/lampp/lampp stop
Type=forking

[Install]
WantedBy=multi-user.target

 
Once the script file is created, run the following command to instruct Ubuntu to execute it at the startup.

sudo systemctl enable xampp.service
