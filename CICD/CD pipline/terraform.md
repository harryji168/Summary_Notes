https://linoxide.com/install-terraform-on-ubuntu-20-04/

Terraform is an infrastructure as a code platform developed by HashiCorp. You can simply write code in the human-readable format following HashiCorp Configuration Language (HCL) and deploy it to get the infrastructure in the cloud. Terraform is supported in many cloud providers like Google, Amazon, Alibaba, etc.

Here in this article, we are going to install the latest version of terraform on Ubuntu. We are performing terraform installation on Ubuntu 20.04 however you can do the same procedure on all Linux platforms.

Also, learn how to use terraform with simple example by launch an ec2 instance and create s3 bucket.

Install terraform on Ubuntu 20.04
Download the latest version of Terrafrom. At the time of writing article, the latest version is 0.14.3 .

$ wget https://releases.hashicorp.com/terraform/0.14.3/terraform_0.14.3_linux_amd64.zip
Now, unzip the download file.

$ sudo apt install zip -y

$ sudo unzip terraform_0.14.3_linux_amd64.zip
This will output you a terraform file just move it to /usr/local/bin/ to execute the command.



$ sudo mv terraform /usr/local/bin/
Check the version

$ terraform version
Terraform version
Terraform version
How to use Terraform
Let's explain how to use terraform with basic examples.

Launching ec2 instance and creating an s3 bucket
I would like to create a folder and do everything inside it.

$ mkdir aws && cd aws
Create a configuration file for terraform having extension 'tf'

vi configuration.tf
Now you need to provide the following information:

Provider: Cloud provider, AWS in our case
Access, Secret key: Access to AWS resources
Region: The region where you are going to provision your infrastructure. I am doing it in Oregon.
On the second block of the code define AWS instance, ie ami ( check amazon EC2 AMI Locator ), instance type, and tag.

The last part of the following code will create s3 bucket named 'bucket-launched-using-terrafrom-20210106'. Remember that the bucket name must be unique over the AWS.

Copy the following content paste in the file configuration.tf file. Provide access, secret key, region, bucket name of your own.

#Define keys and region
provider "aws" {
access_key = "YOUR-ACCESS-KEY"
secret_key = "YOUR-SECRET-KEY"
region = "us-west-2"
}
#Define ec2 instance 
resource "aws_instance" "instance1" {
ami = "ami-089668cd321f3cf82"
instance_type = "t2.micro"
tags = {
Name = "ubuntu-20.04"
}
}
#Define s3 bucket
resource "aws_s3_bucket" "bucket1" {
bucket = "bucket-launched-using-terrafrom-20210106"
acl = "private" # or can be "public-read"
tags = {
Name = "Bucket"
Environment = "Production"
}
}
Now, initialize, plan, and execute your code. Initializing terraform will make necessary configuration, planning is like you see what will happen in actuality. It will also find out your syntax error. And, finally applying means you will deploy the code in the cloud. Let's execute the following command one by one.

Initializing terraform will make the necessary configuration. So, execute the following command,

$ terraform init
Planning is like you see what will happen in actuality. It will also find out your syntax error.

$ terraform plan
Applying means you will deploy the code in the cloud. Do it just by executing the command,

$ terraform apply
It will ask you for confirmation. Just type 'yes' and hit enter. Within few second your infrastructure will be ready.

You can now login to the AWS console and goto the service ec2. You will find ec2 is launched.