# How to disable the "unlock your keyring" popup?

Open the password/keyring manager from settings (or run it directly - seahorse)
Ensure Menu > View > By Keyring is ticked.
In the sidebar, under 'passwords' create a new keyring 'Unprotected' (or re-use an existing keyring, e.g. 'Default', but NOT 'Login' because that will make everything unprotected which you probably don't want)
Right-click the new keyring, and 'set as default'
Right-click the new keyring and set its password as empty (only needed if you adopted an existing keyring)
In the 'Login' keyring, delete the network secret for your wifi.
Go to the network manager and add the network again - its secret should appear in the default keyring, which has no password.
Set the default keyring back to Login.


https://askubuntu.com/questions/495957/how-to-disable-the-unlock-your-keyring-popup





Hi , thanks for asking this question here is what you can do

Click on "Application" then Accessories" and finally "Terminal"
Enter this command line "sudo visudo" and press enter.
Enter your password then press Enter.
Search for "%admin ALL=(ALL) ALL"
And replace the line by "%admin ALL=(ALL) NOPASSWD: ALL.
3.6K viewsView 4 upvotesAnswer requested by 
James Saunders
 


https://www.quora.com/How-do-you-disable-Ubuntu-from-asking-you-for-a-password-for-every-little-thing