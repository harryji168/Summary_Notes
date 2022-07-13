# How to turn off the phpList Logo 


Add the following to your config.php file, as explained in the extended file.

// CREDITS
// We request you retain some form of credits on the public elements of
// phpList. These are the subscribe pages and the emails.
// This not only gives respect to the large amount of time given freely
// by the developers but also helps build interest, traffic and use of
// phpList, which is beneficial to future developments.
// By default the webpages and the HTML emails will include an image and
// the text emails will include a powered by line

// If you want to remove the image from the HTML emails, set this constant
// to be 1, the HTML emails will then only add a line of text as signature
define('EMAILTEXTCREDITS', 1);


# How To Remove Powered By Phplist

Search lists/admin/sendemaillib.php for $text["signature"] = "\n\n--\nPowered by PHPlist, www.phplist.com --\n\n";
Immediately after that line, add the line (or replace the above line with this one):$text[‘signature’] = ”;
Search lists/admin/sendemaillib.php for the part that looks like: if (!EMAILTEXTCREDITS) {
…..
} else {
$html[“signature”] = $PoweredByText;
}
Add the following line after that section: $html[‘signature’] = ”;
Upload the lists/admin/sendemaillib.php file to replace the one on your hosted site and you should be good to go.



# remove Powered by line form Subscribe page,

Go to config/config.php Credits section: Change values 0 to 1.

This will convert powered by image to text.

Go to admin/connect.php

Change $PoweredByText = ”;



https://sysadmin.lk/how-to-remove-powered-by-phplist/