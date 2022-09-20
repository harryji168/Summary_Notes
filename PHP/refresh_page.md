You can do it with PHP:

header("Refresh:0");
It refreshes your current page, and if you need to redirect it to another page, use following:

header("Refresh:0; url=page2.php");


https://stackoverflow.com/questions/12383371/refresh-a-page-using-php