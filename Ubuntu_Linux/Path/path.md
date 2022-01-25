https://stackoverflow.com/questions/25373188/how-to-place-the-composer-vendor-bin-directory-in-your-path

in your ~/.bashrc add these lines:

export PATH="$PATH:~/.composer/vendor/bin"
Then reload:

source ~/.bashrc
Check if its added correctly:

echo $PATH

/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/home/web/bin:~/.composer/vendor/bin
Share
Edit
Follow


https://askubuntu.com/questions/3744/how-do-i-modify-my-path-so-that-the-changes-are-available-in-every-terminal-sess