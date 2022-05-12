https://github.com/paolo-projects/auto-unlocker/issues/31

I had the same issue and after spending few hour and troubleshooting, I managed to resolve this issue.

Step 1

Enable your Virtualization in BIOS

Dell

Step 2 - Turn off Hyper V and untick Virtual Machine Platform in Windows 10 Host Machine

Turn off

Step 3 - Type command in PowerShell (Runs as Admin)

bcdedit /set hypervisorlaunchtype off

Powershell

Step 4 - VMware Workstation Pro 16

Tick Mark - Virtualize Intel VT-x/PT

Hyper 1

Step 6 - MOST IMPORTANT

Option - Version need to Hyper- V (unsupported)

Hyper V

Once you installed Hyper V, Restart the Virtual Server. Then you will see Hyper V in Tools.

Good LucK