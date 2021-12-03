https://github.com/homesh123/country-dropdown-with-flags-for-react

Import npm package: 
npm i country-dropdown-with-flags-for-react



import './App.css';     
import React from 'react';  
import CountryDropdown from 'country-dropdown-with-flags-for-react';  

function App() {    
  return (  
    	<CountryDropdown  id="UNIQUE_ID" className='YOUR_CSS_CLASS' preferredCountries={['gb', 'us']}  value="" handleChange={e => console.log(e.target.value)}></CountryDropdown>   
  );    
}   

export default App;