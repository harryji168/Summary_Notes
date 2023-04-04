
# works https://heynode.com/tutorial/install-nodejs-locally-nvm/


The basic process is as follows:

Download the install script
Using curl, or wget, download the installation script. In the URL below make sure you replace v0.35.0 with the latest version of nvm.

curl -sL https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.0/install.sh -o install_nvm.sh
It's not a bad idea to open the install script and inspect its contents given that you just downloaded it from the Internet.

Run the install script
Run the install script with bash.

bash install_nvm.sh
This script clones the nvm repository into ~/.nvm. Then it updates your profile (~/.bash_profile, ~/.zshrc, ~/.profile, or ~/.bashrc) to source the nvm.sh it contains.

You can confirm that your profile is updated by looking at the install script's output to determine which file it used. Look for something like the following in that file:

export NVM_DIR="$HOME/.nvm"
  [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"  # This loads nvm
  [ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"  # This loads nvm bash_completion
Restart your terminal
In order to pick up the changes to your profile either close and reopen the terminal, or manually source your respective ~/.profile.

Example:

source ~/.bash_profile
Verify it worked
Finally, you can verify that it's installed with the command command:

command -v nvm
Should return nvm. Note: You can't use the which command with nvm since it's a shell function and not an actual application.

See what it does
Finally, run the nvm command to get a list of all the available sub-commands