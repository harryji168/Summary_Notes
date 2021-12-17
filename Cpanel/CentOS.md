https://www.digitalocean.com/community/tutorials/how-to-install-and-use-postgresql-on-centos-7 

How To Install and Use PostgreSQL on CentOS 7


sudo vi /etc/yum.repos.d/CentOS-Base.repo
 
Find the [base] and [updates] sections, enter insert mode by pressing i, and insert the exclude=postgresql* line in both sections. As a result, your file will look like the following, with new lines highlighted:

/etc/yum.repos.d/CentOS-Base.repo
...
[base]
name=CentOS-$releasever - Base
mirrorlist=http://mirrorlist.centos.org/?release=$releasever&arch=$basearch&repo=os&infra=$infra
#baseurl=http://mirror.centos.org/centos/$releasever/os/$basearch/
gpgcheck=1
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-7

exclude=postgresql*

#released updates
[updates]
name=CentOS-$releasever - Updates
mirrorlist=http://mirrorlist.centos.org/?release=$releasever&arch=$basearch&repo=updates&infra=$infra
#baseurl=http://mirror.centos.org/centos/$releasever/updates/$basearch/
gpgcheck=1
gpgkey=file:///etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-7
exclude=postgresql*
...

### 

sudo yum install https://download.postgresql.org/pub/repos/yum/reporpms/EL-7-x86_64/pgdg-redhat-repo-latest.noarch.rpm


## Step 2 — Creating a New PostgreSQL Database Cluster
You have to create a new PostgreSQL database cluster before you can use your Postgres database. A database cluster is a collection of databases that are managed by a single server instance. Creating a database cluster consists of creating the directories in which the database data will be placed, generating the shared catalog tables, and creating the template1 and postgres databases.

The template1 database is needed to create a new database. Everything that is stored in it will be placed in a new database when it is created. A postgres database is a default database designed for use by users, utilities, and third-party applications.

Create a new PostgreSQL database cluster with initdb:

sudo /usr/pgsql-11/bin/postgresql-11-setup initdb
 
You will see the following output:

Output
Initializing database ... OK
Now start and enable PostgreSQL using systemctl:

sudo systemctl start postgresql-11
sudo systemctl enable postgresql-11
 
This will give the following output