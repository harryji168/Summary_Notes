# JavaScript function in href vs. onclick


bad:

<a id="myLink" href="javascript:MyFunction();">link text</a>
good:

<a id="myLink" href="#" onclick="MyFunction();">link text</a>
better:

<a id="myLink" href="#" onclick="MyFunction();return false;">link text</a>
even better 1:

<a id="myLink" title="Click to do something"
 href="#" onclick="MyFunction();return false;">link text</a>
even better 2:

<a id="myLink" title="Click to do something"
 href="PleaseEnableJavascript.html" onclick="MyFunction();return false;">link text</a>
Why better? because return false will prevent browser from following the link

best:

Use jQuery or other similar framework to attach onclick handler by element's ID.

$('#myLink').click(function(){ MyFunction(); return false; });