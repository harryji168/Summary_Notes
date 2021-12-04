  const handleToggle = (newMessage) => {		 
		  let script = document.createElement("script");
		  script.type = "application/javascript";
		  script.src = "http://localhost:1688/react/streaming/main.js";
		  script.async = true;
		  document.body.appendChild(script);
	  }