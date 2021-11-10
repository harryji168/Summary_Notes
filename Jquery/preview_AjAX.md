# AJAX

## Contents

- [AJAX](#ajax)
  - [Contents](#contents)
  - [Asynchronous JavaScript & XML](#asynchronous-javascript--xml)
  - [HTTP Request APIs](#http-request-apis)
    - [Native XMLHttpRequest](#native-xmlhttprequest)
    - [jQuery AJAX](#jquery-ajax)
    - [Native Browser API, Fetch](#native-browser-api-fetch)
  - [More on HTTP Request APIs](#more-on-http-request-apis)
    - [Axios](#axios)
    - [Superagent](#superagent)
  - [JSON](#json)
  - [Live Chat with AJAX](#live-chat-with-ajax)
    - [Chatr-Express Setup](#chatr-express-setup)
      - [Basic GET Request](#basic-get-request)
      - [List Messages](#list-messages)
      - [Refresh the List](#refresh-the-list)
      - [Demo: Create a Message](#demo-create-a-message)
        - [Basic POST Request with FormData](#basic-post-request-with-formdata)
        - [Basic POST Request from Form](#basic-post-request-from-form)
        - [Basic POST Request with JSON](#basic-post-request-with-json)
      - [Demo: Submit Message with Form](#demo-submit-message-with-form)
      - [Demo: Deleting Message](#demo-deleting-message)
  - [Chat Battle](#chat-battle)
    - [Exercise: Battle](#exercise-battle)
    - [Exercise: Battle (Continued...)](#exercise-battle-continued)

## Asynchronous JavaScript & XML

**AJAX** - Asynchronous Javascript And XML (nowadays more JSON which we should really be calling it AJAJ)

**AJAX**: is a set of techniques to fetch data from a server asynchronously without interfering with the display and behavior of the existing page, What that means is, our page loads while, in the background the _AJAX_ fetches data
from a server and make it available for our use. <br />
**[XML](https://www.w3schools.com/xml/)** was the original format to transmit data

## HTTP Request APIs

### Native XMLHttpRequest

Web browser has a buitin tool called **XMLHttpRequest** and this tool will do all the heavy lifting for us with it, we establish a connection with the `url` that we want to send to or receive from.

```js
const getReq = new XMLHttpRequest();

getReq.addEventListener("load", () => console.info(this.responseText));
getReq.open("GET", "http://www.example.org");
getReq.send();
```

### jQuery AJAX

jQuery has `.ajax({...})` method that we can use to make **AJAX** requests

```js
$.ajax({
  method: "GET",
  url: "http://jquery-drills.herokuapp.com/",
  success: data => console.log(data)
});
```

### Native Browser API, Fetch

<blockquote>
The <a href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API" target="_blank">Fetch </a> API provides a JavaScript interface for accessing and manipulating parts of the HTTP pipeline, such as requests and responses. It also provides a global <code>fetch()</code> method that provides an easy, logical way to fetch resources asynchronously across the network.
<footer><a href="[https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch)"> - MDN</a></footer>
</blockquote>

```js
fetch("http://www.example.org")
  .then(response => response.text())
  .then(text => console.info(text));
```

## More on HTTP Request APIs

### [Axios](https://github.com/axios/axios)

**Example**

```js
selectedLink.addEventListener("click", async () => {
  const response = await axios.get("http://www.example.org");
  console.info("data: ", response.data);
});
```

### [Superagent](https://visionmedia.github.io/superagent/)

**Example**

```js
superagent.get("http://www.example.org").then(res => {
  console.info("res: ", JSON.parse(res.text));
});
```

## JSON

**What is JSON?**
JSON - Javascript Object Notation, is a lightweight format used for data interchange. It is the most common way of storing and working with data in javascript. It all contains two main things, which are Objects and Arrays which we already know about the only difference here is that JSON object keys need to be wrapped in double quotes and we access them same way we've learned

_JSON response sample_

```json
{
  "id": 1,
  "name": "bulbasaur",
  "base_experience": 19,
  "height": 7,
  "is_default": true,
  "order": 1,
  "weight": 71,
  "abilities": [
    {
      "is_hidden": true,
      "slot": 3,
      "ability": {
        "name": "chlorophyll",
        "url": "http://pokeapi.com/api/v2/ability/34/"
      }
    }
  ]
}
```

**JSON** is based on a subset of JavaScript. Some JavaScript is not JSON, and some JSON is not JavaScript. It doesn't have any comments or logic. As we mentioned above 👆, it is commonly used for Web APIs and responds to AJAX requests.

## Live Chat with AJAX

### Chatr-Express Setup

clone Chatr-Express app from https://github.com/CodeCoreYVR/chatr-express

```bash
git clone https://github.com/CodeCoreYVR/chatr-express
cd chatr-express
npm install
npm run db:setup
npm start
```

#### Basic GET Request

to send a basic GET request to get back `JSON` data `text`

```js
fetch("/messages")
  .then(res => res.json())
  .then(console.info);

fetch("/messages")
  .then(res => res.text())
  .then(console.info);
```

#### List Messages

_Use `fetch` to get all messages of the server and display them on the page._

To list all messages on the page, go to `public` directory then `scripts/main.js` and update it to:

```js
// public/scripts/main.js
const loadMessages = () => {
  fetch("/messages")
    .then(res => res.json())
    .then(messages => {
      const messagesContainer = document.querySelector("#messages");
      let messagesHTML = "";
      messages.forEach(message => {
        messagesHTML += `
            <li>
                ${message.body}
                <i data-id=${message.id} class="delete-link">x</i>
            </li>
        `;
        messagesContainer.innerHTML = messagesHTML;
      });
    });
};
```

#### Refresh the List

_Wrie code to intermittently refresh the displayed messages_

```js
// public/scripts/main.js
const refreshIntervalms = 3000;
document.addEventListener("DOMContentLoaded", () => {
  loadMessages();
  setInterval(loadMessages, refreshIntervalms);
});
```

#### Demo: Create a Message

##### Basic POST Request with FormData

```js
// public/scripts/main.js
const fd = new FormData();
fd.set("body", "Hello, World!");

fetch("/messages", {
  method: "POST",
  body: fd
});
```

##### Basic POST Request from Form

```js
// public/scripts/main.js
fetch("/messages", {
  method: "POST",
  body: new FormData(document.querySelector("#form"))
});
```

##### Basic POST Request with JSON

```js
// public/scripts/main.js
const headers = new Headers({
  Accept: "application/json, text/plain, */*",
  "Content-Type": "application/json"
});

fetch("/messages", {
  method: "POST",
  headers: headers,
  body: JSON.stringify({ body: "Hello, World!" })
});
```

#### Demo: Submit Message with Form

To create a message update `public/scripts/main.js` to:

```js
// public/scripts/main.js
// add the following function
const createMessage = message => {
  // To make a `POST` request using `fetch`,
  // we need to include a second argument to the fetch method.
  // This second argument is an object representing options for the request.
  // This object has the following properties (to name a few):
  // - method: specifies the HTTP verbe we are using (POST, GET, PATCH, DELETE)
  // - body: Reperesents the body of the POST or PATCH request
  // In this context below, it is an object (message) that represents that
  // that contents of the form used to create a new message
  // - headers: this is an object that represents different HTTP headers we
  // might want to set. In this case that we are sending a JSON string representation of our data
  // to create a message e.g. JSON.stringify({ body: "This is the message body "})
  // We need to set the 'Content-Type' header to have the value 'application/json'
  // { 'Content-Type': 'application/json' }
  fetch("/messages", {
    method: "POST",
    body: message
  }).then(() => {
    // Since making any fetch/ajax request is async, we need to follow it with a `.then`
    // Once the server has responded letting us know it has handled our request, creating
    // a new message, we want to reload our list of displayed messages and clear the form
    loadMessages();
    document.querySelector("#new-message").reset();
  });
};

// and then inside the 'DOMContentLoaded' event listener, add
const newMessageForm = document.querySelector("#new-message");
newMessageForm.addEventListener("submit", event => {
  event.preventDefault();
  const fd = new FormData(event.currentTarget);
  createMessage(fd);
});
```

#### Demo: Deleting Message

To delete a message, we need send a delete request to chatr-express and provide the `ID` of the message that we want to delete

```js
// public/scripts/main.js
// Add the following function anywhere
const deleteMessage = id => {
  fetch(`/messages/${id}`, {
    method: "DELETE"
  }).then(() => {
    loadMessages();
  });
};
// and then inside 'DOMContentLoaded' event listener add:
const messagesContainer = document.querySelector("#messages");
// This is a delegated click handler checking for clicks on delete links
// within the messages container
messagesContainer.addEventListener("click", event => {
  if (event.target.matches("i.delete-link")) {
    const { id } = event.target.dataset;
    deleteMessage(id);
  }
});
```

## [Chat Battle](http://chat-battle.herokuapp.com/)

Visit Chat Battle at http://chat-battle.herokuapp.com/<br />

Using `fetch` in the developer console do the following...

```js
const newMessage = { body: "New Message", username: "Hindreen" };
fetch("/messages", {
  method: "POST",
  body: JSON.stringify(message),
  headers: {
    "Content-Type": "application/json"
  }
}).then(() => {
  fetch("/messages")
    .then(res => res.json())
    .then(messages => console.info(messages.length));
});
```

### Exercise: Battle

- Create a new message with your first name and your favourite tv series as body
- Use fetch to count all the messages

Use `body` instead of `content` when creating messages

### Exercise: Battle (Continued...)

- Replace the body of someone else's message with something else
- Delete a message
- Write a function that can copy a message using only its id as argument

```js
// Replace the body of someone else's message:
const updatedMessage = { body: "updated message", username: "Hano" };
fetch("/messages/16990", {
  method: "PATCH",
  body: JSON.stringify(updatedMessage),
  headers: {
    "Content-Type": "application/json"
  }
}).then(() => {
  fetch("/messages")
    .then(res => res.json())
    .then(console.info);
});

// Delete a message:
fetch("/messages/18195", {
  method: "DELETE"
});

// Copy a message using its id only
const copyMessage = id =>
  fetch("/messages")
    .then(res => res.json())
    .then(messages => messages.filter(message => message.id === id));
```