# Introduction to jQuery - Part 2- Summary Notes
We will dig deeper into some more techniques of using the different aspects of the jQuery library.

## Selectors

### Attribute Selectors
We can select elements using their attributes in different ways for instance:
- `$("[name]")`: selects all the elements that has a `name` attribute
- `$("[name="value"]")`: selects all the elements that have a `name` attribute equals to `value`
- `$("[name!="value"]")`: selects all the elements that have a `name` attribute not equal to `value`
- `$("[name*="value"]")`: selects all the elements that have a `name` attribute than contains the string `value`

### Pseudo Selectors
You can use pseudo selectors to give you more flexibility on selecting elements:
- `$(":first-child")`: selects all the elements that are a first child
- `$(":last-child")`: selects all the elements that are a last child
- `$(":even")`: selects all the even elements zero indexed
- `$(":odd")`: selects all the odd elements zero indexed

## Attributes

### More Methods
Here are some more methods you can use to get or set attributes in jQuery:
- `addClass('hi')`: Adds a class `hi` to the existing set of classes for the selected elements
- `removeClass('hi')`: Remove the class `hi` from the existing set of classes for the selected elements
- `toggleClass('hi')`: Toggles the class `hi` from the existing set of classes for the selected elements. This means that if the class exists it will remove it, if it doesn't exist it will add it.
- `hasClass('hi')`: It will return `true` or `false` whether the selected element has a class `hi`

### jQuery Chaining
You can use chaining of methods in jQuery for the convenience of now having to use multiple lines to call different methods for instance:
```js
// Without chaining
$('a.search').attr('href', 'google.com');
$('a.search').show();

// With chaining
$('a.search').attr('href', 'google.com').show();
```

### Using `val`
You can use `val` method to get or set the values of form fields for instance, if you have:
```js
<input type="text" id="search">
```
You can do
```js
$("#search").val(); // this returns whatever is typed within the text box
$("#search").val("Hello World"); // this sets the content of the text box to `Hello World`
```

## Manipulation

### `append` and `prepend`
You can use `prepend` to add HTML to the beginning of a tag and `append` to add HTML to end of a tag, for instance:
```js
$("body").append("<p>Hi</p>"); // this adds a `p` tag with content `Hi` to the end of the page
$("body").append("<p>Hi</p>"); // this adds a `p` tag with content `Hi` to the start of the page
```

## Traversal

### Using `find`
You can use the `find` method to select all the descendants of a given element filtered by a selector. For instance:
```html
<div id="hey">
  <div><a>Link 1</a></div>
  <a>Link 2</a>
</div>
```
Then if you write with jQuery:
```js
$("#hey").find("a");
```
It will select both `<a>` tags.

### Using `next` and `prev`
You can use `next` to select the sibling immediately following the selected element. You can use `prev` to select the sibling immediately before the selected element.

## Effects
Here are a bunch of other popular effects that you can use with jQuery:
- `toggle` changes the state to hidden if the elements are visible and to visible if they are hidden
- `fadeOut` fades the selected elements out (to a hidden state). You can pass it options such as `slow` and you can give it a call back function as well.
- `fadeIn` fades the element in (to a visible state). You can pass it options and callback functions similar to the `fadeOut` method.
- `slideUp` It does a sliding up motion to an element all the way to a hidden state.
- `slideDown` It does a sliding up motion to an element all the way to a visible state.

## Events

### Shortcut Events
You can use shortcut events for `click`, `mouseenter` and `mouseleave` as they are quite popular instead of using the `on` method as in:
```js
// using "on"
$('a').on('click', function() {
  console.log('clicked');
});

// shortcut method
$('a').click(function() {
  console.log('clicked');
});
```

### Keyboard Events
There are a few keyboard events that you can make use of to respond to users interacting through the keyboard. Here is what you can use:
`keydown`: What the user hits the key down, it gets fired first when the user hit the key
`keypress`: Happens after the keydown event. If you hold the keyboard key, this event will fire multiple times
`keyup`: This event when the user releases the key

To know the key that was pressed, use the `which` method on the `event` object, this gives you a character code. You can translate the character code to a `String` using the `String`'s `fromCharCode` method. Here is an example:
```js
$(document).on('keypress', function(event) {
  // event.which returns the character code of the key pressed.
  var charcode = event.which;
  var key = String.fromCharCode(charcode);
  console.log('key ' + key + ' was pressed');
});
```

## The `submit` Event
If you want to interact with forms on a web page, you can listen to the `submit` event on the form. This is a much better approach than listening to a click on the submit button because forms can be submitted by hitting the enter key. For instance, you can write:
```js
$('form').on('submit', function() {
  console.log('form submitted');
});
```

## Event Bubbling
Events, by default, in Javascript bubble from child elements to their ancestors all the way to the `document` element. For instance if you have:
```html
<div class="container">
  <div class="box"></div>
</div>
```
And you have a click event set for the `.container` and another one set for `.box` then if you click on the `.box` it will trigger the click the event on the `.container`. This won't happen the other way around, clicking on the `.container` won't trigger the event for the `.box`.

### Preventing Events from Bubbling
You can prevent events from bubbling using the `stopPropagation` method on the `event` object as in:
```js
$('.shape').on('click', function(event) {
  console.log('clicked');

  // Don't bubble up this event to the shape's parents.
  event.stopPropagation();
});
```

## Preventing Default Actions
Some HTML elements have a default behaviour. For instance, `<a>` tags will take the user to the site defined by the tag's `href` attribute, `<form>` elements will make an HTTP request to the url defined by the `action` attribute. If you want to prevent the default action you can use `preventDefault` method on the `event` object as in:
```js
$('a').on('click', function(event) {
  console.log('clicked');

  // Don't navigate to the href of this link.
  event.preventDefault();
});
```

## Delegated Events
If you're dynamically adding elements to the page then the new elements won't have possible events attached to them because events are usually attached once the documents loaded (assuming you used the `$(document).ready` technique and not after that. If you want events to be attached to dynamically added elements you can use the delegated events technique by attaching the event to an ancestor element that exists when the document is first loaded. For instance:
```js
$('.container').on('click', '.shape', function() {
  // Works for newly created shapes!
});
```
Because of event bubbling, if you have an element with a class `shape` within `container` and you click on the div with `shape` class within the div with `container` class, the event will bubble from the child div to the parent div and so the function above will get executed.