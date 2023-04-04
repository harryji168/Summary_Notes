# Create a git project homework and initialize it as a git repository. 

```shell
mkdir ~/homework
cd ~/homework
git init
```

# Create a .gitignore file in the root directory of your project with the following inside. You can run the command below which will create it for you.

curl https://www.toptal.com/developers/gitignore/api/node,linux,rails,macos,windows > .gitignore


# Create a Github repository.

Add an origin remote that links to your Github repository. You can find the <github-repo-url> on your newly created projects page as shown in the screenshot below:

```shell
git remote add origin <github-repo-url>
```


Add & create your first commit.

```shell
git add .
git commit -m 'Create project'
```


Push your master branch to your newly created Github repository.
```shell
git push -u origin master
```



## Each Homework
The following instruction are for preparing and submitting your homework.

Go to the root directory of your homework repository directory.
### Checkout to your master branch:

```shell
git checkout master
```

Download your repo's latest changes, create a new branch named after your homework then checkout to it.

```shell
git fetch
```

(to see if there are any changes to pull from the remote repo)

```shell
git pull
```
(to fetch and merge all the changes from the remote repo. Do this in your master/main branch BEFORE creating the new branch)

```shell
git checkout -b <name-of-homework>
```

Now, create a sub-directory for your homework or continue from a previous sub-directory only if the homework builds upon past homework. After submitting and merging two homework assignments, your project directory should look like this:
homework

├── .git

├── .gitignore

├── box_it_script

└── turtle_graphics

 As you are working on your homework, you should get into the habit of making commits as you make progress.
Always make a commit called "initial_commit_hw_#" when you initially create a project in your new homework branch (not the main branch), and make subsequent commits as you work further. 
When you are ready to submit, make a final commit and push the branch to your Github repository.
Go to your Github's project and create a Pull Request of your <name-of-homework> branch to your master> branch. You can follow these instructions on Pull Requests.
Share the link of the Pull Request on this Google Submission form: https://docs.google.com/forms/d/1L6iHrX3IyjmaEYE7X0DVwJ5kCihqDXbY1_-XmUkzQ0g/edit

Once your homework has been marked and approved, use the Merge Pull Request button at the bottom of the Pull Request page to merge your homework branch into master. And, delete the branch.







# How to fix Git always asking for user credentials


```sh
git config --global credential.helper store
```


### without asking password when push

```shell
gh auth login
```

When prompted for your preferred protocol for Git operations, select HTTPS.
When asked if you would like to authenticate to Git with your GitHub credentials, enter Y.


https://docs.github.com/en/get-started/getting-started-with-git/caching-your-github-credentials-in-git

