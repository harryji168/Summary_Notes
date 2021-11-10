# Javascript & CSS Animations
We will uncover some techniques that you can use to add animations to web pages.

## CSS Positioning
Understanding CSS Positioning techniques is key to being able of animating things on the page whether you do that with pure CSS or Javascript. The position attribute tells the browser what strategy to use for layout elements on the page.
The top, left, right, and bottom attributes mean different things depending on the strategy you're using.

Here is a quick reference for the different positioning types:
- `inherit`: use position value of container
- `static`: normal layout
- `relative`: offsets from normal layout position
- `fixed`: offsets from browser window
- `absolute`: offsets from nearest container with a position attribute other than static.

## Dynamically Changing the Appearance of Elements
We can dynamically change the appearance of elements on the page by changing the style attribute of the element or by changing the class or id so that different CSS rules apply.

### Change the style attribute of the element
We can do that in different ways. We can use the `attr` method to change the `style` attribute of an element, for instance:
```js
$("#box").attr("style", "width: 100px");
```
The problem with this approach is that it will replace whatever `style` we had before. It's more convenient to use the `css` method as in:
```js
$("a").css("color", "red");
```
Using `css` can incrementally add or change css properties.

We can also change the appearance of elements by adding or removing classes using the `addClass` and `removeClass` methods as in:
```js
$("#box").addClass("big");
```
and
```js
$("#box").removeClass("big");
```
## Ways to Animate
There are many ways to animate element on a web page. Let's explore a few options.

### Using Animation Loop
You can use `setInterval` to manually change css properties of elements to give the impression of animation. For instance if you do:
```js
setInterval(function(){
  $("#title").css("fontSize", parseInt($("#title").eq(0).css("fontSize")) + 1 + "px");
}, 30);
```
the above code will increase the font size of the element with id `title` every 30 milliseconds which will give it the feeling of animation.

### Using jQuery Basic Animations (Effects)
We can use the built-in jQuery animations such as:
```js
$('.shape').slideUp(500);
$('.shape').fadeOut('slow');
```

### Using jQuery `Animate` method
jQuery comes with a flexible method `animate` that helps in generating animations that you can use to change any css attribute:
```js
$("img").animate({
  width: "100%",
  height: "100%"
}, 2000, function() {
  return $(this).fadeOut(2000);
});
```
The above will animate images on the page to a width of `100%` and height `100%` from whatever width and height they are on. The animation will happen over 2000 milliseconds and at the end it will fade out the image.

### Using CSS Transitions and Keyframes
This is the best way to animate elements on the page if it's possible to achieve the kind of animations you want with them. They are the best because they are very smooth because of hardware acceleration. Below are a few ways to do CSS transitions.

#### Using `transition`
You can use the CSS transition property by setting the property to transition and the time `transition: [attribute] [duration];` as in:
```css
transition: opacity 0.3s;
```
This will transition the opacity of the element from whatever opacity it has to the new one over 0.3 seconds. Here is how we can use it:
```css
li {
  /* 1) Set the original property value */
  opacity: 0;
  /* 2) Describe how to transition that property */
  transition: opacity 0.5s;
}
/* 3) Create a class that sets the final property value */
li.active {
  opacity: 1;
}
```
In the example above we can use jQuery to add the `active` class to our `li` and then the opacity will transition from being 0 to 1 over 0.5 seconds.

### CSS Keyframes
You can do some more advanced css animations using `keyframes` by defining an `@keyframes` that defined the css properties of the element over percentage of time. Then you can set the `animation` property to an element and define the amount of time you want the animation to happen in as in:
```css
/* 1) Create animation keyframes */
@keyframes drive {
  0%    { left: 0; bottom: 0; }
  50%   { left: 0; bottom: 200px; }
  100%  { left: 200px; bottom: 200px; }
}
/* 2) Create a class to add the animations dynamically */
#rocket.animate {
  animation: drive 5s;
}
/* 3) Add -webkit- prefixes */
```
In the example above when we add `animate` class to element `#rocket` it will move up 200px then right 200px and stay there. The `100%` position will define the final destination of the element.

## jQuery UI
If you are doing many interactions with your website, you may want to consider using jQuery UI. It gives you the ability to do things like:
- Dragging and Dropping
- Resizing Elements
- Sorting Lists

You will have to include jQuery UI separately because it's not part of the jQuery library. It requires jQuery to work. You can find more information it here: [https://jqueryui.com/](https://jqueryui.com/)