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


postcss

The best way to use PostCSS with CSS-in-JS is astroturf. Add its loader to your webpack.config.js:

module.exports = {
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ['style-loader', 'postcss-loader'],
      },
      {
        test: /\.jsx?$/,
        use: ['babel-loader', 'astroturf/loader'],
      }
    ]
  }
}
Then create postcss.config.js:

module.exports = {
  plugins: [
    require('autoprefixer'),
    require('postcss-nested')
  ]
}

