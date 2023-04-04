# React.js Summary Notes
React.js is a Javascript library that helps you build user interfaces. It was started with Facebook, you can find more information about it [here](https://facebook.github.io/react/).
## Setting Up
### Download the file
Go to the React.js website: [https://facebook.github.io/react](https://facebook.github.io/react) and download Starter Kit. The version as of this writing is 0.14.3: [https://facebook.github.io/react/downloads/react-0.14.3.zip](https://facebook.github.io/react/downloads/react-0.14.3.zip). Unzip the folder.
### Set up the HTML
Create an empty HTML page with references to the React.js and React.js DOM as in:
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World with React.js</title>
    <script src="react.js"></script>
    <script src="react-dom.js"></script>
  </head>
  <body>
  </body>
</html>
```
The code above assumes that that you've put the `react-dom.js` and `react.js` within the same folder as your HTML file.
### Add Babel
In addition to the two libraries above we will need to add `Babel` which is a Javascript compiler which we will need to compile `JSX` templates in React.js. No need to learn the feature of `Babel` at the moment but if you're curious check out: [https://babeljs.io/](https://babeljs.io/). For now, add the following to the `<head>` of you HTML page:
```html
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.24/browser.min.js"></script>
```
## Creating a Hello World app with React.js
### Script Tag
In order to get React.js to work with its built-in templating language `JSX` we will need to put the Javascript with in a special `<script>` tag that has `text/babel` as the `type` property as in:
```html
<script type="text/babel">
// your code goes here
</script>
```
The Javascript written there will likely be with improper format that won't compile normally so `babel` will compile to become a functional Javascript before it can be run on the page. This will be done automatically.
### Creating a React component
You create a React.js component by calling `React.createClass` function that takes an object and must have at least one property `render` which is a function that returns what needs to be rendered as in:
```js
var HelloWorld = React.createClass({
  render: function(){}
});
```
### Rendering JSX
One key feature of React.js is the ability to render `JSX` from your Javascript. This allows you to mix HTML or HTML-like code with you Javascript. We can rewrite our first component as:
```js
var HelloWorld = React.createClass({
  render: function(){
    return <p>Hello World</p>;
  }
});
```
Note that the above is not a valid Javascript. If you try to run the Javascript above in a Chrome console, it will fail. However because we're using `Babel` this will be compiled to:
```js
var HelloWorld = React.createClass({
  displayName: "HelloWorld",

  render: function render() {
    return React.createElement(
      "p",
      null,
      "Hello World"
    );
  }
});
```
which is a valid Javascript but harder to write than the first version using JSX.
### Rendering a component
In order to display the component above to HTML you can use the `ReactDom.render` as in:
```js
ReactDOM.render(<HelloWorld />, document.getElementById("container"));
```
The above will render `<p>Hello World</p>` within an HTML element with id `container`.
### Using props
To use props, pass them as if they were HTML attributes to the component. Note that props are immutable so you can only pass them when creating the component as in:
```js
  var HelloWorld = React.createClass({
    render: function(){
      return <p>Hello World and Hello {this.props.name}</p>;
    }
  });
  ReactDOM.render(<HelloWorld name="Tam" />, document.getElementById("container"));
```
This will render `<p>Hello World and Hello Tam</p>` with in an HTML tag with id `container`.
### Styling components
If you want to style components in React.js then you would need to set the `style` attribute for the HTML element by passing a Javascript object to it as in:
```js
var styles = {color: “#FF0”}
<h1 style={styles}></h1>
```
Note that the `styles` variable has to be a valid Javascript object which means that if the property includes a `-` with in, you should convert it to `lowerCamelCase` style. For example to add a `background-color` css style you can do:
```js
var styles = {color: "#FF0", backgroundColor: "red"}
<h1 style={styles}></h1>
```
## Handling State
State is the part of the React Component that can actually change. Unlike props, states in React are mutable.
### Setting Initial state
To set initial state in React.js you must use the `getInitialState` function when you define the React.js component:
```js
getInitialState: function(){
  return {total: 0}
},
```
This defines a state `total` that you can access in other functions using `this.state.total` as in:
```js
// ...
render: function(){
  return <p>The total is: {this.state.total}</p>;
}
//...
```
### Changing the state
You can change the state using `setState` function provided by React as in:
```js
add: function(newAmount) {
  var newTotal = this.state.total + newAmount;
  this.setState({total: newTotal});
  }
```
Please keep in mind that if you're using the `total` state in your `render` function, React will re-run the `render` function and update the DOM accordingly.