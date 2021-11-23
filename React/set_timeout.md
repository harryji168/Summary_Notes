

https://upmostly.com/tutorials/settimeout-in-react-components-using-hooks


Use setTimeout in your React components to execute a function or block of code after a period of time. Let’s explore how to use setTimeout in React. There is also a similar method called setInterval, you can learn more about it from this guide

The TL;DR:

useEffect(() => {
  const timer = setTimeout(() => {
    console.log('This will run after 1 second!')
  }, 1000);
  return () => clearTimeout(timer);
}, []);


App.js
import React, { useEffect } from 'react';

const App = () => {
  
  useEffect(() => {
    const timer = setTimeout(() => {
      setCount('Timeout called!');
    }, 1000);
    return () => clearTimeout(timer);
  }, []);

  return (
    <div>
      Hello, World
    </div>
  );
};

export default App;