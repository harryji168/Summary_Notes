https://linuxhint.com/install-sqlite-ubuntu-linux-mint/
sudo apt update
sudo apt upgrade
 sudo apt install sqlite3

 sqlite3 –version


Gem::Ext::BuildError: ERROR: Failed to build gem native extension.

    current directory: /home/harryji/.rbenv/versions/3.0.0/lib/ruby/gems/3.0.0/gems/sqlite3-1.4.2/ext/sqlite3
/home/harryji/.rbenv/versions/3.0.0/bin/ruby -I /home/harryji/.rbenv/versions/3.0.0/lib/ruby/3.0.0 -r
./siteconf20220507-24270-xqzuaw.rb extconf.rb
checking for sqlite3.h... no
sqlite3.h is missing. Try 'brew install sqlite3',

 apt-get install libsqlite3-dev