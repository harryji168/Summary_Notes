https://askubuntu.com/questions/117291/how-to-turn-on-the-integrated-webcam


```
sudo apt-get install cheese
```
```
cheese
```
 


 http://4youngpadawans.com/stream-camera-video-and-audio-with-ffmpeg/

 $ sudo apt-get install ffmpeg
$ sudo apt-get install v4l-utils


$ v4l2-ctl --list-devices


ffmpeg -f v4l2 -i video="HP 5M Camera" -f alsa -i hw:0 -profile:v high -pix_fmt yuvj420p -level:v 4.1 -preset ultrafast -tune zerolatency -vcodec libx264 -r 10 -b:v 512k -s 640x360 -acodec aac -strict -2 -ac 2 -ab 32k -ar 44100 -f mpegts -flush_packets 0 udp://172.18.0.1:5000?pkt_size=1316

ffmpeg -f v4l2 -i /dev/video0  -f alsa -i hw:0 -profile:v high -pix_fmt yuvj420p -level:v 4.1 -preset ultrafast -tune zerolatency -vcodec libx264 -r 10 -b:v 512k -s 640x360 -acodec aac -strict -2 -ac 2 -ab 32k -ar 44100 -f mpegts -flush_packets 0 udp://192.168.1.4:5000?pkt_size=1316

https://fschuindt.github.io/blog/2020/12/31/streaming-video-and-audio-of-an-usb-webcam-to-multiple-users-of-a-website-with-ssl-basic-authentication-and-invideo-timestamps-ffmpeg-rtmp-nginx-hls-mpeg-dash.html

kill the server

```
sudo killall ffmpeg
```

ifconfig
