I had used below commands to migrate all branches to the new repository.

~$ git clone --mirror <url_of_old_repo>
~$ cd <name_of_old_repo>
~$ git remote add new-origin <url_of_new_repo>
~$ git push new-origin master
~$ git push new-origin --mirror