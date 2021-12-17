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
