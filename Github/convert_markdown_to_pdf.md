https://gist.github.com/justincbagley/ec0a6334cc86e854715e459349ab1446


Using Pandoc:
$ pandoc How_I_got_svg-resizer_working_on_Mac_OSX.md -s -o test1.pdf

https://pandoc.org/installing.html

a universal document converter




## GRIP
http://superuser.com/questions/689056/how-can-i-convert-github-flavored-markdown-to-a-pdf I've had success using grip to display markdown in Chrome and then use Chrome's "Save as PDF" option in the Print dialog.

pip install grip  
grip your_markdown.md



Node.js
http://superuser.com/questions/689056/how-can-i-convert-github-flavored-markdown-to-a-pdf You can also use Node.js based markdown-pdf

npm install -g markdown-pdf