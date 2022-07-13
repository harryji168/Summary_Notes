https://dev.to/dechamp/php---how-to-fix-class--not-found-error-1gp9


Problem
I am getting a "Class '' not found" when running my code. I use composer autoload to load my classes.

Solution (hopefully 😜)
So there are a few things you can do to fix the "Class '' not found" in PHP.

Typically it's just a typo or a uppercase where it should be lower or vice versa, in the namespace.

So here is how I go about it.

Step 0 (thanks Kushal Niroula! see his comment below)
As Kushal Niroula mentioned below, you should always check that you're importing the class at the top script, so do this first!

use Your/Class/Here;

Step 1
Check the composer.json file, the autoload path. This is what the autoloader will be matching against, so confirm your base folder that it's pointing to is correct.

For example if we have our psr-4 set to "DeChamp\\MyApp\\": "src/", that would mean that if I have a folder called "Service" inside of the "src" folder, then the namespace would be "DeChamp\MyApp\Service".

Check that the namespace path matches the path to the file.

namespace DeChamp\MyApp\Service; // within file dummy.php
src/Service/dummy.php
Step 2
Check both the namespace at the top of your file, and the folder directory match up. Also that there are no typos and the paths match casing, both upper and lower.

Many times I've ran in to a missed casing issue.

Note: some systems are case insensitive, so this may not apply but should still be practiced. I've had a time where local dev didn't match, so it worked on my machine but then production complained.

Wrong
namespace DeChamp\MyApp\Service; // within file dummy.php
src/service/dummy.php //service is lower when the first character should be capitalized
Right
namespace DeChamp\MyApp\Service; // within file dummy.php
src/Service/dummy.php // folder names match the namespace exactly
Step 3
If you've confirmed all is right and you are banging your head against the wall, then this is probably what the issue is.

If you've updated your composer file since you last ran composer install, it could be outdated. Composer uses a cache file for speed and performance.

To force the autoload file to regenerate just run the command below.

composer dumpautoload

This should fix it, if you indeed know for certain all other items are correct.

Feedback
Did I misspeak on any of this? Have questions/suggestions? Feel free to give feed back or compliments 😁

