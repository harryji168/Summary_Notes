


# Viewing UDP stream using HTML (Firefox)

https://stackoverflow.com/questions/49182391/viewing-udp-stream-using-html-firefox


I'm actually working on a similar project at the moment.

The only way I've managed to get a UDP stream to play within a browser without VLC is to first run the stream through ffmpeg and then use something like VideoJS to display the resulting playlist within a browser.

i.e.

sudo /home/stuart/bin/ffmpeg -nostdin -v quiet -err_detect ignore_err -re -i "udp://@239.110.10.3:1234?overrun_nonfatal=1&fifo_size=50000000" -c:v libx264 -an -flags -global_header -hls_time 10 -hls_list_size 6 -hls_wrap 10 -start_number 1 /usr/share/nginx/html/mux1.m3u8 &
then...

<html>
    <head>
        <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
        <script src="https://unpkg.com/video.js/dist/video.js"></script>
        <script src="https://unpkg.com/@videojs/http-streaming/dist/videojs-http-streaming.js"></script>
    </head>
    <body>
          <div class="column">
              <h3>MUX 1</h3>
              <video-js id="stmux1" class="vjs-default-skin" controls preload="auto" width="280" autoplay>
                  <source src="mux1.m3u8" type="application/x-mpegURL">
              </video-js>        
          </div>
          <script>
              var stmux1 = videojs('stmux1');
          </script>
    </body>
</html>
Share
Improve this answer



```
ffmpeg -nostdin -threads 1 -i 'udp://@0.0.0.0:8554?overrun_nonfatal=1&fifo_size=50000000' -f:v mpegts -fflags nobuffer -vf format=yuv420p -f v4l2 /dev/video42
```
To get a preview of the output in vlc you can run this command
To test this try this command(vlc needs to be installed): 
```
vlc -vvv --network-caching=300 --sout-x264-preset=ultrafast --sout-x264-tune=zerolatency --sout-x264-vbv-bufsize 0 --sout-transcode-threads 4 --no-audio udp://@:8554
```

kill the server

```
sudo killall ffmpeg
```