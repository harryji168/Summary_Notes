https://kb.vmware.com/s/article/1038189


Powering on a virtual machine fails with the error: Cannot open the disk (1038189)
Last Updated: 3/9/2021
Categories: Troubleshooting
Total Views: 463765
 23
Language:

English
Learn how VMware Skyline Advisor and Skyline Health Diagnostics work together to provide proactive intelligence and self-service log analysis.
Use Skyline Advisor to avoid issues before they occur across VCF, vSphere, vSAN, NSX, vROps & Horizon. Skyline Findings are based on top KBs, VMSAs/CVEs and design best practices.
Use Skyline Health Diagnostics to root cause vSphere & vSAN logs when an issue occurs. Skyline Health Diagnostic Findings are based on top KBs and VMSA/CVEs. You can use the Skyline Health Diagnostics tool in online or offline mode.
If you require additional help from technical support, please use Skyline Advisor to initiate a Log Assist to reduce time to upload logs. TSEs can also initiate logs to reduce effort.
Symptoms
Cannot power on the virtual machine
Powering on the virtual machine fails
You see the error:

An unexpected error was received from the ESX host while powering on VM <VM_name>.
Reason: Cannot open the disk disk_name or one of the snapshot disks it depends on.

Where Reason is one of these:

Reason: Failed to lock the file.
Reason: The parent virtual disk has been modified since the child was created.
Reason: The destination file system does not support large files.
Reason: Could not open/create change tracking file.
Reason: Cannot allocate memory.
Reason: The file specified is not a virtual disk.
Reason: Insufficient permission to access file.
Resolution
Error 1: Failed to lock the file

The error Failed to lock the file means that another process is opening the file and the process you are using cannot open the file properly.

This typically occurs if you:
Attempt to start a second virtual machine using the same virtual machine configuration .vmx file
Power on a virtual machine with mounted disks via the vmware-mount utility
Try to turn on a virtual machine through the user interface during a snapshot operation
Try to add a virtual disk to a virtual machine that is already in use
To resolve this issue, see the Knowledge Base article Investigating virtual machine file locks on ESXi.

Error 2: The parent virtual disk has been modified since the child was created

This error occurs when snapshots are in a bad state, either through manual intervention or through a system failure.

To resolve this issue, see the Knowledge Base article "The parent virtual disk has been modified since the child was created" error.

Error 3: The destination file system does not support large files

This issue occurs if the block size of the destination datastore does not support a VMDK as large as the source.
 
To resolve this issue, ensure that the destination datastore is formatted with a block size that is large enough to support the VMDK file of the source machine. For more information, see the Knowledge Base article Block size limitations of a VMFS datastore.

Error 4: Could not open/create change tracking file

This issue may occur if a filename-ctk.vmdk file was earlier created and has not been cleared.

To resolve this issue, see the Knowledge Base article  “could not open/create change tracking files” error when powering on VM.

Error 5: Cannot allocate memory

This issue may occur if the VMFS module runs out of heap space.

To resolve this issue, see the Knowledge Base article ESXi/ESX host reports VMFS heap warnings when hosting virtual machines that collectively use 4 TB or 20 TB of virtual disk storage.

Error 6: The file specified is not a virtual disk

This issue may occur when the .vmdk descriptor file is corrupt or missing.

To resolve this issue, create a new .vmdk descriptor file for this disk and then unregister and re-register the virtual machine. This ensures that the vSphere Client detects the correct disk size and the virtual machine powers on correctly.

For more information on creating a new descriptor file, see the Knowledge Base article Recreating a missing virtual machine disk descriptor file.
 
Error 7: Insufficient permission to access file

This issue is usually observed in virtual machines located on NFS datastores. This issue may occur due to permissions issues on the NFS datastore.
 
To resolve this issue, ensure that the host has the correct read/write permissions to access the NFS export. If your storage array has the No Root Squash option, ensure that the option is enabled or contact your Storage Administrator.

Error 8: older VMware Hardware Version

To resolve this issue, upgrade the VM's hardware version to the latest available.