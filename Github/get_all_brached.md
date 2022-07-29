$ git pull --all


https://stackoverflow.com/questions/67699/how-to-clone-all-remote-branches-in-git


I had used below commands to migrate all branches to the new repository.

~$ git clone --mirror <url_of_old_repo>
~$ cd <name_of_old_repo>
~$ git remote add new-origin <url_of_new_repo>
~$ git push new-origin master
~$ git push new-origin --mirror

git clone --mirror https://github.com/Capicheio/capiche-core-testbed/

cd capiche-core-testbed