# Introduction to jQuery - Part 1- Summary Notes
jQuery is used to manipulate and interact with web pages. It makes dealing with them very easy across different browsers. To best understand jQuery we have to learn about the DOM first.

## What is the DOM?
DOM stands for Document Object Model which is an API for your web page. It's a collection of Javascript objects that represents the HTML document of the current page. DOM objects contain methods for querying and manipulating web pages, and saying what should happen when the user makes certain actions. e.g. "When the user clicks this button, make all the links red."

### What can you do with the DOM?
1. Make changes to the HTML after the page has loaded
2. Respond to a user’s actions (events)
3. Any combination of 1 and 2

## The `window` Object
You have access to the `window` object in every browser. Every interaction we want to do with the browser will happen at the window object. All global functions such as `alert` and `confirm` are properties of the `window` object.

## The `HTML` Document
HTML files look like this:
```html
<html>
  <head>
    <script>...</script>
    ...
  </head>
  <body>
    <h1>Title</h1>
    <a id='link' href="http://www.google.com">Link</a>
  </body>
</html>
```
The DOM represents the HTML document as a tree of Javascript objects. As we can tell from the above the `HTML` document is structured as a tree so we can represent it in Javascript as a tree of Javascript objects.

Here is an example of interacting with the DOM:
```javascript
for (var i=0; i < document.links.length; i += 1) {
  document.links[i].style.color = "red";
}
```
The example above turns all links to red on a web page. The `document` object is a property of the `window` object.

## Why jQuery
Although we can use plain Javascript to interact with the DOM, we use jQuery for the following reasons:
- DOM made easy
- Cross-browser compatibility
- Overwhelmingly popular

## Primary Usage in jQuery
Most of the time when using jQuery we do the following:
1. Select elements
2. Manipulate selected elements
3. Add event listeners to selected elements

## jQuery Selectors
You can use standard CSS selectors to select elements on the page with jQuery using the `$` function:
- `$('*')`: this selects all the elements on the page
- `$('p')`: this selects all elements that are `p` tags on the page
- `$('.hello')`: this selects all elements with class `hello` on the page
- `$('#special')`: this selects all elements with id `special` on the page
- `$('p .special')`: this selects all elements with class `special` that are has an ancestor with tag `p`
- `$('.hello, .hi')`: this selects all elements with class `hello` or class `hi`

Note that jQuery `$` function returns a `wrapped set` object that we can do many things on like apply a manipulation function, iterate through it and attach event listener.

## jQuery Attributes
We can use the `attr` function in jQuery to get or set specific HTML attributes as in:
```javascript
// Get the value of "src" attribute.
$('img').attr('src');

// Set the value of "src" attribute.
$('img').attr('src', 'http://google.com/logo.png');
```

## jQuery Manipulation
We have many techniques for manipulating elements on the page with jQuery.

### Removing Elements
You can remove elements from the page with jQuery using the `remove` method as in:
```html
<a>One</a>
<a>Two</a>
<img src="three.jpg"/>
<img src="four.jpg"/>
```
then:
```javascript
// Remove all links from the page.
$('a').remove();

// Remove the first image from the page.
$('img').eq(0).remove();
```

### Getting and Setting HTML Attributes
You can get or set HTML attributes using the `html` method as in:
```html
<div class="container">
  Original
</div>
```
then:
```js
// Get the contents of the container.
$('.container').html();

// Update the contents of the container.
$('.container').html('New Content');
```

## Traversal
There are many techniques in jQuery to traverse through page elements once you select elements on the page related in some way to the originally selected element or elements. Here is an example using `children`:
```html
<div id="box">
  <a>a</a>
  <span>b</span>
  <button>c</button>
</ul>
```
then:
```js
// Select all the children of the box
$('#box').children();
```

## Effects
We use effects to easily update or animate elements on the page. Here is an example for using the `hide` method:
```html
<div>
  <span>A</span>
  <a>B</a>
  <img src="c.png"/>
</div>
```
then:
```js
// Hide all links and buttons
$('a, button').hide();
```
Here is another example using the `show` method to show hidden elements:
```html
<div>
  <span>A</span>
  <a>B</a>
  <img src="c.png"/>
</div>
```
then:
```js
// Show links if they are hidden
$('a').show();
```

## Events
The primary idea of events is pre-defining that When X happens, do Y. X is an event and Y is a function.
To add events handlers you can simply using this format:
```js
$(selector).on(event, handlerFunction);
```
For instance:
```html
<span>Click Me</span>
```
then:
```js
// Log when the span is clicked
$('span').on('click', function() {
  console.log('clicked');
});
```
The code above defined an event handler so that when you click on any `span` element the word `clicked` will be logged to the console.

Most common event types are: `click`, `mouseenter` and `mouseleave`.

### Using `this`
You can use `this` in jQuery event handlers to reference the specific element that the event happened on as in:
```
$('tr').on('mouseenter', function () {
  $(this).attr('class', 'highlight');
});
```
The above registers a `mouseenter` event on any `tr` element. However `$(this)` select the specific `tr` that was clicked.