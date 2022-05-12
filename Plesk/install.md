##  install 
https://get.plesk.com/

https://serverfault.com/questions/423245/wget-starts-downloading-then-stops-cannot-write-to


https://github.com/plesk

sudo su


sh <(curl https://autoinstall.plesk.com/one-click-installer || wget -O - https://autoinstall.plesk.com/one-click-installer)



Downloading file pool/PSA_18.0.40_7765/examiners/php_launcher.sh: 100% was finished.

ERROR: Failed to install the extension 'Git' (package: git):
[2021-12-19 13:58:02.439] 66792:61bfaae04eb73 ERR [extension/git] The execution of post-install.php has failed with the following message:
[2021-12-19 13:58:02.433] 68542:61bfaaea69be3 ERR [extension/git] Execution installer has failed with exit code 1, stdout: , stderr: ERROR:__main__:Command '['apt-get', '-qq', 'update', '--allow-releaseinfo-change']' returned non-zero exit status 100
stdout:
stderr:W: An error occurred during the signature verification. The repository is not updated and the previous index files will be used. GPG error: http://deb.anydesk.com all InRelease: The following signatures were invalid: EXPKEYSIG 18DF3741CDFFDE29 philandro Software GmbH <info@philandro.com>
W: GPG error: http://apt.postgresql.org/pub/repos/apt focal-pgdg InRelease: The following signatures couldn't be verified because the public key is not available: NO_PUBKEY 7FCC7D46ACCC4CF8
E: The repository 'http://apt.postgresql.org/pub/repos/apt focal-pgdg InRelease' is not signed.

exit status 1

The execution of post-install.php has failed with the following message:
[2021-12-19 13:58:02.433] 68542:61bfaaea69be3 ERR [extension/git] Execution installer has failed with exit code 1, stdout: , stderr: ERROR:__main__:Command '['apt-get', '-qq', 'update', '--allow-releaseinfo-change']' returned non-zero exit status 100
stdout:
stderr:W: An error occurred during the signature verification. The repository is not updated and the previous index files will be used. GPG error: http://deb.anydesk.com all InRelease: The following signatures were invalid: EXPKEYSIG 18DF3741CDFFDE29 philandro Software GmbH 
W: GPG error: http://apt.postgresql.org/pub/repos/apt focal-pgdg InRelease: The following signatures couldn't be verified because the public key is not available: NO_PUBKEY 7FCC7D46ACCC4CF8
E: The repository 'http://apt.postgresql.org/pub/repos/apt focal-pgdg InRelease' is not signed.

exit status 1



Warning! Not all packages were installed.
Please check if your system services are operable.
Please resolve this issue and try to install the packages again.
Visit https://support.plesk.com/ to search for a solution.