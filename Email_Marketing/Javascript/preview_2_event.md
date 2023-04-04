# Events & The Loop

## Events

> DOM Events are sent to notify code of interesting things that have taken 
> place. Each event is represented by an object which is based on the Event 
> interface, and may have additional custom fields and/or functions used to get 
> additional information about what happened. Events can represent everything 
> from basic user interactions to automated notifications of things happening in 
> the rendering model.
> – [MDN](https://developer.mozilla.org/en-US/docs/Web/Events)

The events seen in this class occur as a result of user interaction with the 
page. This includes the `click` event that is triggered when the mouse button is 
clicked somewhere in the page. Also, events such as `keydown` that trigger when 
a keyboard key is pressed on the leading edge.

## Setup

The examples that follow will be based on the [Doggo Arena Demo](https://github.com/CodeCoreYVR/doggoArena_base_project.git).
For quick reference a sample of the code where unnecessary parts have been 
replace by comments (i.e. `<!-- ... -->`) for conciseness is shown below:

```html
<!-- ... -->
<body>
  <!-- ... -->
  <div class="teams">

    <div class="team salmon">
      <h1 class="title">Team Salmon</h1>
      <div class="roster">
        <div id="toxic-tim" class="doggo fighter">
          <h1>Toxic Tim</h1>
        </div>
        <div id="bumble-bertha" class="doggo fighter">
          <h1>Bumble Bertha</h1>
        </div>
        <div id="nina-the-ninja" class="doggo fighter">
          <h1>Nina The Ninja</h1>
        </div>
      </div>
    </div>

    <div class="team aquamarine">
      <h1 class="title">Team Aquamarine</h1>
      <div class="roster">
        <div id="inbread-dog" class="doggo fighter">
          <h1>In-Bread Dog</h1>
        </div>
        <div id="larry-the-lion" class="doggo fighter">
          <h1>Larry The Lion</h1>
        </div>
        <div id="moneybags-michael" class="doggo fighter">
          <h1>Moneybags Michael</h1>
        </div>
      </div>
    </div>
    <!-- ... -->

  </div>

  <script type="text/javascript" src="index.js"></script>
</body>
<!-- ... -->
```

## `document.addEventListener()` or `<node>.addEventListener()`

To run code in response to user interaction, we make use of the 
`.addEventListener` method. This method take at least two arguments:

- A event name as a string. These are specific names such as `'click'`, 
  `'mouseenter'`, `'keydown'`, `'input'`, etc. You can find a [list of these on 
  MDN](https://developer.mozilla.org/en-US/docs/Web/Events).

- A callback which is called once the supplied event is triggered.

In the example below, an event listener is set on the `document` meaning the 
entire page. It listens for any click triggered by user's mouse. Once it 
detects a click, the callback in the second argument is run. The callback is 
often named 'listener'.

```js
document.addEventListener('click', () => {
  console.log('Page has been clicked!');
});
```

### `event` Object

When the listener is called, it is passed an argument, the `event` object. This 
object contains information about the program at the time the event was 
triggered.

Properties of the `event` object include:

#### `currentTarget`

A reference to the caller node of the `addEventListener` method.

In the following example, `currentTarget` will refer to the node of `toxicTim`.

```js
toxicTim.addEventListener('click', event => {
  console.log(event);
});
```

#### `target`

A reference to the target to which the event was originally dispatched.


#### `type`

#### `timeStamp`


## Mouse Events

### `'click'`

### `'dblclick'`

### `'mousedown'`

### `'mouseup'`

### `'mouseenter'`

### `'mouseleave'`

## Form Events

### `'submit'`

### `'input'`

## `FormData` Constructor

## Keyboard Events

### `'keydown'`

### `'keyup'`

### `'keypress'`

## Propagation