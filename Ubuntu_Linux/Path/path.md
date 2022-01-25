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



/home/harryji/.config/composer/vendor/laravel/installer/bin/

export PATH=/home/harryji/.rbenv/shims:/home/harryji/.rbenv/shims:/home/harryji/.local/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/shims:/home/harryji/.local/bin:/home/harryji/.sdkman/candidates/kotlin/current/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.nvm/versions/node/v16.13.1/bin:/home/harryji/.rbenv/shims:/home/harryji/.rbenv/bin:/home/harryji/.local/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/home/harryji/.dotnet/tools:/home/harryji/.rvm/bin:/home/harryji/.dotnet/tools:/home/harryji/.rvm/bin:/home/harryji/.rvm/bin:/home/harryji/.rvm/bin:/home/harryji/.config/composer/vendor/laravel/installer/bin/:/home/harryji/.rvm/bin: