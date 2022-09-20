# JavaScript Single Page Application
```
npm install -g npm
```
```
http-server -p 9999
```

```
gem 'rails_same_site_cookie'
```
## Contents

- [JavaScript Single Page Application](#javascript-single-page-application)
  - [Contents](#contents)
  - [Setup](#setup)
    - [Add HTML File](#add-html-file)
    - [Add CSS file](#add-css-file)
  - [Main JavaScript file](#main-javascript-file)
    - [Add a Helper Module to Handle All API Requests](#add-a-helper-module-to-handle-all-api-requests)
    - [Add a Helper Module to Handle Sessions](#add-a-helper-module-to-handle-sessions)
    - [Sgin user in and create a session](#sgin-user-in-and-create-a-session)
    - [Test Endpoints](#test-endpoints)
    - [Render all Questions](#render-all-questions)
    - [Render a Single Question](#render-a-single-question)
    - [Create a Question](#create-a-question)
    - [Update a Question](#update-a-question)
    - [Delete a Question](#delete-a-question)
  - [CORS](#cors)

## Setup

For this class we will use [Awesome Answers Rails API] make sure to clone it and run the server on a different port in a separate terminal tab

```bash
# open a new terminal tab
git clone https://github.com/CodeCoreYVR/awesome-answers-api

cd awesome-answers-api
bundle install
rails server
```

### Add HTML File

We will have 5 different sections

- Welcome >> this will only show a welcome message
- Question Show >> this will show a single question details
- Question Index >> this will show the list of all questions
- Question New >> this will show a form to create a new question
- Question Edit >> this will show a form to update a specific question

with that in mind let's add `index.html` file to the root of your project directory

```html
<!-- index.html -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <link
      rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    />
    <link rel="stylesheet" href="/css/master.css" />
    <script src="/js/main.js" charset="utf-8"></script>
  </head>

  <body>
    <div class="ui container">
      <header>
        <div class="ui secondary pointing menu navbar">
          <a class="active item" href="" data-target="welcome">
            Welcome
          </a>
          <a class="item" href="" data-target="question-index">
            Questions
          </a>
          <a class="item" href="" data-target="question-new">
            New Question
          </a>
        </div>
      </header>

      <div class="ui segment">
        <!-- Welcome Section -->
        <section class="page active" id="welcome">
          <div class="ui header">
            Welcome to Awesome Answers
          </div>
        </section>

        <!-- question show -->
        <section class="page" id="question-show"></section>
        <!-- questions index -->
        <section class="page" id="question-index">
          <div class="ui header">
            Questions
          </div>
          <ul class="ui list question-list"></ul>
        </section>

        <!-- Create a new Question Section -->
        <section class="page" id="question-new">
          <div class="ui header">New Question</div>
          <form class="ui form" id="new-question-form">
            <div class="field">
              <label for="title">Title</label>
              <input
                type="text"
                name="title"
                id="title"
                placeholder="Question Title"
              />
            </div>

            <div class="field">
              <label for="body">Body</label>
              <textarea
                name="body"
                id="body"
                placeholder="Question Body"
                rows="3"
              ></textarea>
            </div>

            <button class="ui button" type="submit">Create Question</button>
          </form>
        </section>

        <!-- Edit Question Section -->
        <section class="page" id="question-edit">
          <div class="ui header">Edit Question</div>
          <form class="ui form" id="edit-question-form">
            <div class="field">
              <label for="title">Title</label>
              <input
                type="text"
                name="title"
                id="title"
                placeholder="Question Title"
              />
            </div>

            <div class="field">
              <label for="body">Body</label>
              <textarea
                name="body"
                id="body"
                placeholder="Question Body"
                rows="3"
              ></textarea>
            </div>

            <input type="hidden" value="" name="id" />
            <button class="ui button" type="submit">Update Question</button>
          </form>
        </section>
      </div>
    </div>
  </body>
</html>
```

**Note: I've already included links and scripts for `master.css`, `main.js`, and `Semantic UI`**

### Add CSS file

create a new directory `css` and add `master.css` to it

```css
/* css/master.css */
.page {
  display: none;
}

.page.active {
  display: block;
}

.ui.segment.question-show-container {
  padding-right: 0;
}
```

## Main JavaScript file

Now We will do the rest of the work here in `js/main.js` so go ahead and create a new directory `js` and add `main.js` to it

### Add a Helper Module to Handle All API Requests

Before we do anything go ahead and take care of [CORS](#cors)

Now that `CORS` has been taken care of, let's add a helper module to handle all API requests

```js
// js/main.js
const baseUrl = "http://localhost:3000/api/v1";

// REQUESTS
// Create a helper module that has all question related requests
const Question = {
  // Fetch all questions from server
  all() {
    return fetch(`${baseUrl}/questions`, {
      credentials: "include"
    }).then(res => res.json());
  },
  // Fetch a single quesion
  one(id) {
    return fetch(`${baseUrl}/questions/${id}`, {
      credentials: "include"
    }).then(res => res.json());
  },
  // Create a Question
  create(params) {
    // params is an object that reperesents a question
    // {body: 'qBody', title: 'qTitle' }
    return fetch(`${baseUrl}/questions`, {
      credentials: "include",
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(params)
    }).then(res => res.json());
  },
  // Edit a Question
  update(id, params) {
    return fetch(`${baseUrl}/questions/${id}`, {
      method: "PATCH",
      credentials: "include",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(params)
    }).then(res => res.json());
  },
  // Delete a Question
  destroy(id) {
    return fetch(`${baseUrl}/questions/${id}`, {
      credentials: "include",
      method: "DELETE"
    }).then(res => res.json());
  }
};
```

### Add a Helper Module to Handle Sessions

We need to be signed in to be able to create, update, and delete a question. Let's go ahead and create a module to handle sessions

```js
// js/main.js
const Session = {
  // Create a Session
  create(params) {
    // params is an object that represents a user
    // { emal: 'someone@domain.com', password: 'supersecret' }
    return fetch(`${baseUrl}/session`, {
      credentials: "include",
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(params)
    }).then(res => res.json());
  },
  // Destroy a Session
  destroy() {
    return fetch(`${baseUrl}/session`, {
      credentials: "include",
      method: "DELETE"
    }).then(res => res.json());
  }
};
```

### Sign user in and create a session

Let's sign the user to create a session and test our endpoints after

```js
// js/main.js
Session.create({ email: "js@winterfell.gov", password: "supersecret" });
```

Above we are automatically logging in but, this is a hacky log in, we should never sign in that way. We will sign up from the browser and enter user information there in the coming classes. But, for now, since we won't be able to create, update, and delete a question if we are not signed in, we are going to sign in automatically by using a cookie.  Because of stricter security measures in Chrome and other browsers, it does not allow for cross-origin cookie sharing.  So, we will need to add another gem to our API to allow for this: https://github.com/pschinis/rails_same_site_cookie

```ruby
  gem 'rails_same_site_cookie'
```
**Please note, this gem might not work for IP addresses, or might have trouble sharing between https/ http (see docs for more info).  To bypass this, try using localhost instead **

**Sometimes the cookie is created, and everything is set up correctly, but it still has an 'Unauthorized' issue.  This might be due to caching.  Make sure to disable caching in the browser.  Go to inspect > Network > check 'Disable Cache'**

### Test Endpoints

In this section we are just testing endpoints, it's not necessary, delete it or put it in a falsy condition after testing

```js
// js/main.js
// TESTING
// Fetch all questions
Question.all().then(questions => console.log(questions));

// Fetch a single question
Question.one(31).then(question => console.log(question));
// We must have a question with id 31, we are hardcoding it here just for testing

// Create a question
// Note: you won't be able to create a question unless you are signed in because, our API is designed that way
const newQuestion = {
  title: "New Question Title",
  body: "New Question Body"
};
Question.create(newQuestion);
Question.all().then(questions => console.log(questions));

// Update a question
const editedQuestion = {
  title: "Edited Question Title",
  body: "Edited Question Body"
};

Question.update(31, editedQuestion);

// Delete a question
Question.destroy(31).then(res => console.log(res));
```

### Render all Questions

Steps:

1. Add an event listener to Questions link from navigation bar
2. Handle Navigation
3. Fetch all questions when user clicks on `Questions` link in navigation bar
4. Render the questions page with fetched questions

so, with that in mind let's go ahead and follow the above steps to render all questions to the page

```js
// js/main.js
// Render All Questions
function renderQuestions(questions) {
  const questionsContainer = document.querySelector("ul.question-list");
  questionsContainer.innerHTML = questions
    .map(question => {
      return `
        <a class="item question-link" data-id="${question.id}" href="">
        <span>${question.id} - </span>
            ${question.title}
        </a>
        `;
    })
    .join("");
}

// Referesh Questions
function refereshQuestions() {
  Question.all().then(questions => renderQuestions(questions));
}
// Navigation
function navigateTo(id, clickedLink) {
  if (id === "question-index") {
    // get all questions
    refereshQuestions();
  }

  document.querySelectorAll(".page").forEach(node => {
    node.classList.remove("active");
  });

  document.querySelector(`.page#${id}`).classList.add("active");

  if (clickedLink) {
    document.querySelectorAll(".navbar a").forEach(link => {
      link.classList.remove("active");
    });

    clickedLink.classList.add("active");
  }
}
// Wait for DOM content to load
document.addEventListener("DOMContentLoaded", () => {
  // Show all questions
  document.querySelector(".navbar").addEventListener("click", event => {
    event.preventDefault();
    const link = event.target.closest("[data-target]");
    if (link) {
      event.preventDefault();
      const targetPage = link.getAttribute("data-target");
      // Navigate to Questions index
      navigateTo(targetPage, link);
    }
  });
});
```

### Render a Single Question

Steps:

1. Add an event listener to questions container to grab the clicked question
2. Get the id of the question and send a get request to get the question
3. Render the question then navigate to question show page

with that in mind, let's go a head and update `main.js` to render a single question so add the following to `main.js`

```js
// js/main.js
// inside DOMContentLoaded event, just under show all questions event listener add
const questionsContainer = document.querySelector("ul.question-list");
questionsContainer.addEventListener("click", event => {
  const questionLink = event.target.closest("a.question-link");
  if (questionLink) {
    event.preventDefault();
    const { id } = questionLink.dataset;
    getAndDisplayQuestion(id);
  }
});
// then above add getAndDisplayQuestion function
function getAndDisplayQuestion(id) {
  Question.one(id).then(question => {
    renderQuestionDetails(question);
    navigateTo("question-show");
  });
}

// and above this function add renderQuestionDetails function
function renderQuestionDetails(question) {
  const questionDetailsContainer = document.querySelector("#question-show");
  const htmlString = `
    <div class="ui segment question-show-container">
        <div class="ui header">${question.title}</div>
        <p>${question.body}</p>
        <small>Asked by: ${question.author.full_name}</small>
        <a class="ui right floated orange button link" data-target="question-edit" data-id="${
          question.id
        }" href="">Edit</a>
    </div>
    <div class="ui segment">
        <h3 class="ui horizontal divider">Answers</h3>
        <ul class="ui relaxed divided list">
            ${question.answers
              .map(a => `<div class="item">${a.body}</div>`)
              .join("")}
        </ul>
    </div>
  `;
  questionDetailsContainer.innerHTML = htmlString;
}
```

### Create a Question

Steps:

1. Add an event listener to new question form
2. Get the form data with 'FormData' and use it to create a new question
3. reset the form and display the newly create question

```js
// js/main.js
// just below show single question add
const newQuestionForm = document.querySelector("#new-question-form");
newQuestionForm.addEventListener("submit", event => {
  event.preventDefault();
  const fd = new FormData(event.currentTarget);
  const newQuestion = {
    title: fd.get("title"),
    body: fd.get("body")
  };
  Question.create(newQuestion).then(question => {
    // clear form
    newQuestionForm.reset();
    // display question
    getAndDisplayQuestion(question.id);
  });
});
```

### Update a Question

Steps:

1. Add an event listener to `edit` button in question-show container
2. Populate question edit form with current question data
3. Add an event listener to question-edit-form
4. get the updated question data and update the question
5. clear the form and display the updated question

```js
// js/main.js
// add populateForm function just above navigation function
function populateForm(id) {
  Question.one(id).then(question => {
    document.querySelector("#edit-question-form [name=title]").value =
      question.title;
    document.querySelector("#edit-question-form [name=body]").value =
      question.body;
    document.querySelector("#edit-question-form [name=id]").value = question.id;
  });
}
// and add the following just below create question event listener
document.querySelector("#question-show").addEventListener("click", event => {
  const link = event.target.closest("[data-target]");
  if (link) {
    event.preventDefault();
    populateForm(link.getAttribute("data-id"));
    const targetPage = link.getAttribute("data-target");
    navigateTo(targetPage);
  }
});

const editQuestionForm = document.querySelector("#edit-question-form");
editQuestionForm.addEventListener("submit", event => {
  event.preventDefault();

  const fd = new FormData(event.currentTarget);
  const updatedQuestion = {
    title: fd.get("title"),
    body: fd.get("body")
  };

  Question.update(fd.get("id"), updatedQuestion).then(question => {
    // clear form
    editQuestionForm.reset();
    // display updated question
    getAndDisplayQuestion(question.id);
  });
});
```

### Delete a Question

Steps:

1. Add delete button to question show page
2. Add an event listener to it (we already have an event listener on question-show that we are using for 'edit' and we gonna add 'delete' as well)
3. Delete the question and redirect to Questions index page

```js
// js/main.js
// Update renderQuestionDetails function to:
function renderQuestionDetails(question) {
  const questionDetailsContainer = document.querySelector("#question-show");
  const htmlString = `
    <div class="ui segment question-show-container">
        <div class="ui header">${question.title}</div>
        <p>${question.body}</p>
        <small>Asked by: ${question.author.full_name}</small>
        <a class="ui right floated orange button link" data-target="question-edit" data-id="${
          question.id
        }" href="">Edit</a>
        <a class="ui right floated red button link" data-target="delete-question" data-id="${
          question.id
        }" href="">Delete</a>
    </div>
    <div class="ui segment">
        <h3 class="ui horizontal divider">Answers</h3>
        <ul class="ui relaxed divided list">
            ${question.answers
              .map(a => `<div class="item">${a.body}</div>`)
              .join("")}
        </ul>
    </div>
  `;
  questionDetailsContainer.innerHTML = htmlString;
}

// Update question-show event listener to:
document.querySelector("#question-show").addEventListener("click", event => {
  const link = event.target.closest("[data-target]");
  if (link) {
    event.preventDefault();
    const targetPage = link.getAttribute("data-target");
    if (targetPage === "delete-question") {
      // delete the question
      Question.destroy(link.getAttribute("data-id")).then(() => {
        // then navigate to questions index page
        navigateTo("question-index");
      });
    } else {
      populateForm(link.getAttribute("data-id"));
      navigateTo(targetPage);
    }
  }
});
```

## CORS

To be able to make cross-origin requests, what we me by is making HTTP/AJAX requests we need allow accepting requests from different domains. <br />

cross-origin requests come into the scene in the following cases

1. when try to make a request from a different domain to our API example making a request from facebook to google two completely different domains
2. when we try to make a request from the same domain but, different ports for example making a request from localhost:8080 to localhost:3000
3. when we try to make a request using a different protocol for example making a request from https://localhost:3000 to http://localhost:3000

4. when we try to make a request from a sub domain to a domain for example making a request from http://developers.google.com to http://google.com

**To allow cross-origin requests in our rails API, we need to configure it so, we gonna add rack-cors gem (https://github.com/cyu/rack-cors) or https://rubygems.org/gems/rack-cors**

***You will also need to configure cors in a new file in the API.  Create config/initializers/cors.rb and add the following: ***
```ruby
  Rails.application.config.middleware.insert_before 0, Rack::Cors do
    allow do
      origins '127.0.0.1:5500', 'localhost:5500' # whitelist domains
      resource(
        '/api/*', # limit requests to paths that look like /api
        headers: :any, # all the requests to contain any headers
        credentials: true, # because we're sending cookies with CORS we must add this flag
        methods: [:get, :post, :patch, :put, :options, :delete] #allow these http verbs
      )
    end
end
```

open postman and test your API before making any request from our app to make sure that our server is working