# How to Change Cursor Size on Ubuntu Desktop

When we move to a new house, we set it up according to our needs. The same is the case when moving to a new desktop environment. Visibility and ease of use is a great concern for any user when working on a computer system. The cursor size, among many other visual features, is one such thing. We definitely want it to be in accordance with our screen size, text size, and Zoom screen settings.

We are running the procedure and commands mentioned in this tutorial on an Ubuntu 18.04 or Ubuntu 20.04 LTS system.


Change Cursor size on Ubuntu Through the GUI
Ubuntu allows you to change the cursor size through the Settings utility. You can access the Settings utility through the Ubuntu Dash or by clicking the down-arrow located at the top-right corner of your screen and then clicking the settings icon:

Change Cursor size on Ubuntu trough GUI

The Settings utility will display the Wi-Fi panel by default. Select the Universal Access tab from the left pane and then click Cursor Size under the Seeing column. You can choose the cursor size from an available list of five sizes.

Select Cursor size

The cursor size will immediately change to your desired setting.

Change Cursor size on Ubuntu Through the Command Line
Open the Ubuntu Terminal either through the Dash or by pressing Ctrl+Alt+T. Enter the following command in order to get the current cursor position:


$ gsettings get org.gnome.desktop.interface cursor-size
Use gsettings to change cursor size

24 is the default cursor size, in pixels, for an Ubuntu desktop. Following pixel values correspond to the sizes you see in the graphical Settings utility:

24: Default
32: Medium
48: Large
64: Larger
96: Largest
You can change the cursor size from these options through the following command:

$ gsettings set org.gnome.desktop.interface cursor-size [sizeInPixels]
Change cursor size by using a shell command

Restart your system for these changes to take effect.

Through this article, you learned to change the cursor size to whatever seems appropriate to your eyes through the GUI and the command line.
# gsettings set org.gnome.desktop.interface cursor-size 96
