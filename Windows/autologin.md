# Use Registry Editor to turn on automatic logon
follow these steps:

Click Start, and then click Run.

In the Open box, type Regedit.exe, and then press Enter.

Locate the HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Winlogon subkey in the registry.

Double-click the DefaultUserName entry, type your user name, and then click OK.

Double-click the DefaultPassword entry, type your password, and then click OK.

If the DefaultPassword value does not exist, it must be added. To add the value, follow these steps:

On the Edit menu, click New, and then point to String Value.

Type DefaultPassword, and then press Enter.

Double-click DefaultPassword.

In the Edit String dialog, type your password and then click OK.

 Note

If no DefaultPassword string is specified, Windows automatically changes the value of the AutoAdminLogon key from 1 (true) to 0 (false), disabling the AutoAdminLogon feature.

On the Edit menu, click New, and then point to String Value.

Type AutoAdminLogon, and then press Enter.

Double-click AutoAdminLogon.

In the Edit String dialog box, type 1 and then click OK.

If you have joined the computer to a domain, you should add the DefaultDomainName value, and the data for the value should be set as the fully qualified domain name (FQDN) of the domain, for example contoso.com..

Exit Registry Editor.

Click Start, click Shutdown, and then type a reason in the Comment text box.

Click OK to turn off your computer.

Restart your computer. You can now log on automatically.