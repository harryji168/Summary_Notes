///////////////////////////////////////////////////////////////////////////////////
//
//  Stretch (Optional)
//  Too easy? Got bored? Try these. Stretches in the homework or exercises often 
//  require knowledge not taught during the class and many may require some research.
//  Add support to use it as a script without prefixing the filename with node. 
//  $ ./boxit.js 'Jon Snow' 'Cersei Lannister' 'Daenerys Targaryen'
//
///////////////////////////////////////////////////////////////////////////////////

/* how to run js without type node?
just need two steps
1. include node file, add following code in the first line of .js
     #!/usr/bin/env node
2. make js first be executable. run the following code in terminal
     chmod +x boxit.js
*/


/usr/bin/xdotool
xdotool windowsize 41943139 100% 100%
xdotool windowmove 41943139 0 0

xdotool mousemove 0 0 click 1 mousemove restore

get mouse position
xdotool getmouselocation --shell

mouse click and back 
xdotool mousemove 41 131 click 1 mousemove restore

xdotool search --all  --name "README.md"

xdotool search --all  --name "test"

http://manpages.ubuntu.com/manpages/trusty/man1/xdotool.1.html#window%20commands

xwininfo -id 41943191

xdotool windowmove  0x2800097 "test" 0 0