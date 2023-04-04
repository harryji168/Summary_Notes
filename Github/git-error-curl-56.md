How to fix git error: RPC failed; curl 56 GnuTLS

https://stackoverflow.com/questions/38378914/how-to-fix-git-error-rpc-failed-curl-56-gnutls

80

The accepted answer from @harlequin might work, but I spend 2 hours and could not build git package from source code.

However, Check the below link as this works for me.

The remote end hung up unexpectedly while git cloning

just update the http post buffer value

git config --global http.postBuffer 1048576000