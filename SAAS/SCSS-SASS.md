SCSS Example: 
 

/* .scss file */
$bgcolor: blue;
$textcolor: red;
$fontsize: 25px;
  
/* Use the variables */
body {
  background-color: $bgcolor;
  color: $textcolor;
  font-size: $fontsize;
}
Output CSS: 
 

body {
  background-color: blue;
  color: red;
  font-size: 25px;
}
/* now this can apply resulting html file */
SASS Example: 

/* SASS */
  
$primary-color: green
$primary-bg: red
  
body 
  color: $primary-color
  background: $primary-bg
Output CSS:

/* CSS */
body {
  color: green;
  background: red;
}