Prerequisites#
An AWS account setup and activated.

The versions of tools used to produce this guide are:

kubectl: 1.20.2  
helm: 3.3.4  
eksctl: 0.43.0-rc.0  
If you encounter any issues, please check the version of tool you have installed.

For more information, see
installing kubectl.
installing helm.
the eksctl command line utility.
Setup your environment variables with an AWS access key and secret.


sudo apt  install awscli
aws --version

aws configure


# urllib3 (1.26.1) or chardet (3.0.4) doesn't match a supported version #3270
https://github.com/DefectDojo/django-DefectDojo/issues/3270
pip install -U urllib3 requests