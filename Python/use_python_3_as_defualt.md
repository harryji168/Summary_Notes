<!-- https://dev.to/meetsohail/change-the-python3-default-version-in-ubuntu-1ekb


Steps to Set Python3 as Default On ubuntu?
Check python version on terminal - python --version
Get root user privileges. On terminal type - sudo su
Write down the root user password.
Execute this command to switch to python 3.6. update-alternatives --install /usr/bin/python python /usr/bin/python3 1
Check python version - python --version
All Done! -->

```
sudo update-alternatives --install /usr/bin/python python /usr/bin/python3 1
```