Team Workflow
Starting The Project
*******One person (Git Master) should do the following steps.*******

A. Create a new Rails project in a new directory
Choose a project name and generate app: rails new <project-name>

cd <project-name>


B. Make sure to have a .gitignore file
Create a .gitignore. Go to http://gitignore.io and generate it for macos,linux,rails,node.

<project-name>
  |
  +- .git/
  +- .gitignore
C. Repositories and branches
Create a new GitHub repository.  Make sure to make the repo public.  This is the repo the whole team will push and pull from.

Follow Github's instructions and add the new remote repository to your local project's repo

It is recommended to include a Readme file to add any notes or instructions for the project.  At the very least, adding the team member's names to the Readme would be a good idea.  (Hint: If you add the Readme remotely, you will need to pull it to the local repository to avoid a conflict before committing any code.  The alternative would be to add a Readme locally and not remotely.)

git add -A

git commit -m "Create project"

Create an integration branch: git branch integration

git push -u --all

Set "integration" as default branch and make "master" branch protected.

Make all team members collaborators.

*******Once the project is up, everybody should do the following:*******

git clone <git-project-url>. Make sure to the url with the git protocol (begins in "git") and not the one with https.
Starting a New Feature
*******This is done by each developer, for each feature they work on*******

Go to the project root dir: cd /path/to/project

Download latest work from Github. Make sure you start in the "integration" branch: git pull

Create branch (and switch to) from latest version of "integration":git checkout --no-track -b <feature-name> origin/integration

(Repeated) Begin working and do regular commits. Save your code.

(Repeated) git push -u origin <feature-name>

Once you're done with your feature, do the following:

git fetch

git merge origin/integration

Solve conflicts and commit.

git push origin <feature-name>

Go to Github and make a Pull-Request of your <feature-name> branch to "integration".

If there is a conflict, resolve it.

Share Pull Request with Teammate or git master for quick review.  

Once approved, click the big green button "Merge Pull Request".  Make sure someone comments on the pull request before merging.

If you're done with the feature and everything is merged to "integration", click "Delete Branch" button for the specific feature branch.

End of Project
*******This is done by one person (Git Master)*******

Make a pull request from the integration branch to the main/master branch and share the link with the instructor

