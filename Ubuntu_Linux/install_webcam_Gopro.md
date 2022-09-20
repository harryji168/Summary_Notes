https://askubuntu.com/questions/117291/how-to-turn-on-the-integrated-webcam


```
sudo apt-get install cheese
```
```
cheese
```

use gopro as webcam

https://github.com/jschmid1/gopro_as_webcam_on_linux

```
sudo su -c "bash <(wget -qO- https://bit.ly/35wtnTl)" root
```
```
sudo gopro webcam
```

v4l2loopback is not loaded!
v4l2loopback does not exist. Please either install v4l2loopback or get it from source via https://github.com/umlaeute/v4l2loopback

https://zoomadmin.com/HowToInstall/UbuntuPackage/v4l2loopback-dkms
Step 1
sudo apt-get update -y
Step 2
sudo apt-get install -y v4l2loopback-dkms


# successful

Discovered: enx3ac02399d34e.
Using enx3ac02399d34e to discover the GOPRO_IP.
Found 172.29.104.54
To control the GoPro, we need to contact another interface (GOPRO_IP ending with .51).. Adapting internally..
Now using this GOPRO_IP internally: 172.29.104.51
{ "status": 2, "error": 0 }
{ "status": 2, "error": 0 }
Sucessfully started the GoPro Webcam mode. (The icon on the Camera should have changed)


You should be ready to use your GoPro on your prefered videostreaming tool. Have Fun!


If you want to use the GoPro in your prefered Video conferencing software (browser and apps works alike) pipe the UDP stream to a video device (that was created already) with this command: 
```
ffmpeg -nostdin -threads 1 -i 'udp://@0.0.0.0:8554?overrun_nonfatal=1&fifo_size=50000000' -f:v mpegts -fflags nobuffer -vf format=yuv420p -f v4l2 /dev/video42
```
To get a preview of the output in vlc you can run this command
To test this try this command(vlc needs to be installed): 
```
vlc -vvv --network-caching=300 --sout-x264-preset=ultrafast --sout-x264-tune=zerolatency --sout-x264-vbv-bufsize 0 --sout-transcode-threads 4 --no-audio udp://@:8554
```


# cheese not work 

check device 
```
sudo apt install hardinfo
```
```
hardinfo
```

```
sudo gopro webcam
```


If you want to use the GoPro in your prefered Video conferencing software (browser and apps works alike) pipe the UDP stream to a video device (that was created already) with this command: 
```
ffmpeg -nostdin -threads 1 -i 'udp://@0.0.0.0:8554?overrun_nonfatal=1&fifo_size=50000000' -f:v mpegts -fflags nobuffer -vf format=yuv420p -f v4l2 /dev/video42
```
To get a preview of the output in vlc you can run this command
To test this try this command(vlc needs to be installed): 
```
vlc -vvv --network-caching=300 --sout-x264-preset=ultrafast --sout-x264-tune=zerolatency --sout-x264-vbv-bufsize 0 --sout-transcode-threads 4 --no-audio udp://@:8554
```


![Screenshot from 2021-11-09 15-01-46](https://user-images.githubusercontent.com/21187699/141019493-6c15ad8c-4597-4a60-945b-1407a668832c.png)


```
lsusb
```

![Screenshot from 2021-11-09 15-12-25](https://user-images.githubusercontent.com/21187699/141020435-5b55cfda-8bbe-400c-a448-286d4ce807f1.png)

Bus 004 Device 001: ID 1d6b:0003 Linux Foundation 3.0 root hub
Bus 003 Device 005: ID 0e0f:0002 VMware, Inc. Virtual USB Hub
Bus 003 Device 004: ID 0e0f:0002 VMware, Inc. Virtual USB Hub
Bus 003 Device 003: ID 2672:0052 GoPro HERO9
Bus 003 Device 002: ID 0e0f:0003 VMware, Inc. Virtual Mouse
Bus 003 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
Bus 001 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub
Bus 002 Device 003: ID 0e0f:0002 VMware, Inc. Virtual USB Hub
Bus 002 Device 002: ID 0e0f:0008 VMware, Inc. Virtual Bluetooth Adapter
Bus 002 Device 001: ID 1d6b:0001 Linux Foundation 1.1 root hub

https://askubuntu.com/questions/741760/is-it-possible-to-turn-off-a-specific-usb-port-so-it-doesnt-accept-any-device

lsusb -t

/:  Bus 04.Port 1: Dev 1, Class=root_hub, Driver=xhci_hcd/4p, 10000M
/:  Bus 03.Port 1: Dev 1, Class=root_hub, Driver=xhci_hcd/4p, 480M
    |__ Port 1: Dev 2, If 0, Class=Human Interface Device, Driver=usbhid, 12M
    |__ Port 2: Dev 3, If 1, Class=CDC Data, Driver=cdc_ether, 480M
    |__ Port 2: Dev 3, If 0, Class=Communications, Driver=cdc_ether, 480M
    |__ Port 3: Dev 4, If 0, Class=Hub, Driver=hub/7p, 12M
    |__ Port 4: Dev 5, If 0, Class=Hub, Driver=hub/7p, 480M
/:  Bus 02.Port 1: Dev 1, Class=root_hub, Driver=uhci_hcd/2p, 12M
    |__ Port 1: Dev 2, If 0, Class=Wireless, Driver=btusb, 12M
    |__ Port 1: Dev 2, If 1, Class=Wireless, Driver=btusb, 12M
    |__ Port 2: Dev 3, If 0, Class=Hub, Driver=hub/7p, 12M
/:  Bus 01.Port 1: Dev 1, Class=root_hub, Driver=ehci-pci/6p, 480M

sudo tee unbind <<< "3-2" 


use VMWARE menu removable device
add gopro 9
