https://support.brother.com/g/b/downloadlist.aspx?c=us_ot&lang=en&prod=hll2300d_us_eu_as&type3=625&os=128&mid=true


https://help.brother-usa.com/app/answers/detail/a_id/52188/~/install-drivers-%28deb-or-rpm%29-using-the-driver-install-tool---linux


1. Network users must first connect your machine to your network before installing the software. Refer to the steps based on your connection method:

     - Wired Ethernet Users: Connect an Ethernet cable between your machine and your router.

     - Wireless Users: Click here for instructions on how to verify or connect your machine to your wireless network.

     - USB Users: Connect a USB cable between your machine and your computer.

2. Download the Driver Install Tool from https://support.brother.com. Click here for instructions on how to navigate to our downloads page.

note icon Depending on your Linux Operating System, you'll need to choose between deb or rpm. Ubuntu will require the deb download and Fedora will require the rpm download.

3. Open a terminal window by pressing CTRL + ALT + T.

4. In the terminal interface, use the Change Directory (CD) command to go to the directory where you downloaded the file.
          Ex: cd Downloads

note icon The downloaded file is typically saved in the Downloads folder. The location may vary based on your browser's settings.

5. Enter the command to extract the downloaded installer file.
          Ex: gunzip linux-brprinter-installer-2.1.1-1.gz

note icon The file name may vary based on the installer version. Verify the downloaded file and alter the version seen in red, accordingly.

6. Get Superuser authorization on your computer by using either the su or sudo su command. The steps may vary depending on your operating system.

7. Run the tool from within the terminal using the following command. You must change the red section of the command to match your installer tool version and Brother machine model:
          Ex: bash linux-brprinter-installer-2.2.1-1 MFC-J880DW

```
          sudo bash linux-brprinter-installer-2.2.3-1 MFC-J435w
```          


note icon The file name may vary based on the installer version and machine model. Verify the file downloaded and machine model and alter the version seen in red accordingly.

8. The driver installation will begin.  Follow the on-screen instructions.

     - When asked "Will you specify the DeviceURI?", do the following based on your connection type:

               - USB Users: Choose N(No)

               - Network Users: Choose Y(Yes) and DeviceURI number. Select the number that corresponds with Specify IP address.

note icon The DeviceURI number is the machine's IP Address, which can typically be found on the machine's Network Configuration report. Your machine must already be connected to your network before installing the drivers.

note icon Click here and then select your model's category and model number for instructions on how to print the Network Configuration or User Settings report.

Follow the on-screen prompts. The installation will take a few moments.  Please wait until it's complete.