
# How to create an animated GIF from MP4 video via command line?


ffmpeg 3.4.4 can do it directly on Ubuntu 18.04

You likely want to use something like:

```
sudo apt install ffmpeg

ffmpeg -i simplescreenrecorder-2021-10-28_16.17.41.mkv test.mp4

ffmpeg -i test.mp4 test.gif
```

for github animation git fit file


## sample

wget -O opengl-rotating-triangle.mp4 https://github.com/cirosantilli/media/blob/master/opengl-rotating-triangle.mp4?raw=true


ffmpeg \
  -i opengl-rotating-triangle.mp4 \
  -r 15 \
  -vf scale=512:-1 \
  -ss 00:00:03 -to 00:00:06 \
  opengl-rotating-triangle.gif


  
## online not work 

https://convertio.co/mkv-gif/

https://www.zamzar.com/

