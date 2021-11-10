# package.json 

"start": "PORT=3001 react-scripts start",

# src/App.js 

remove 
import logo from './logo.svg';
and app function

```
import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
    </div>
  );
}
```

# make components folder
src/components/AnswerDetails.js 
src/components/AnswerList.js
src/components/QuestionDetails.js 
src/components/QuestionList.js 
src/components/QuestionShowPage.js

# index.js
src/index.js

import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
// import QuestionShowPage from './components/QuestionShowPage';
import QuestionList from './components/QuestionList'

ReactDOM.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
// ReactDOM.render(<QuestionDetails name="testname" />,
//   document.getElementById('root')
// );


ReactDOM.render(<QuestionList
  list={
    [
      { title: "What's ur favourite color?", body: "RED YELLOW BLUE", created_at: "2020-10-10", author: { full_name: "AAA" } },
      { title: "What r u doing?", body: "Nothing", created_at: "2019-10-10", author: { full_name: "BBB" } },
      { title: "What is this?", body: "A computer", created_at: "2018-10-10", author: { full_name: "CCC" } },
    ]
  }
/>,
  document.getElementById('root')
);

