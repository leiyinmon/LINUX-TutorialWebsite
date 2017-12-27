function getHTTPObject() {
		var xmlhttp;
		// branch for native XMLHttpRequest object
		if (window.XMLHttpRequest){
		  xmlhttp=new XMLHttpRequest()
		}
		// branch for IE/Windows ActiveX version
		else if (window.ActiveXObject){
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
		}else{	
		  return false;
		}
		return xmlhttp;
	  }

	  var teamMember = null;
	  var selected = null;
	  function sectionSelect(_selected)
	  {
		removeColor();
		selected = _selected;
		teamMember = selected.id;
		dynamicLoader();
		changeColor();
	  }
	  // create the HTTP Object
	  var http = getHTTPObject();

	  //Function to load dynamic content
	  function dynamicLoader()
	  {
		//if the http object exists..
		if(http)
		{
		  //set up the object
		  http.open("get", "updateContact.php?contentID=" +teamMember, true);
		  //set up the callback
		  http.onreadystatechange = handleResponse;
		  //send it off
		  http.send();
		}
	  }
	  
	  function changeColor()
	  {
		var classes = document.getElementById(teamMember).classList;
		classes.add("selectedSection");
	  }
	  
	  function removeColor()
	  {
		var classes = document.getElementsByClassName("selectedSection");
		for(var i = 0, len = classes.length; i < len; i++)
		{
			var toRemove = classes[i];
			toRemove.classList.remove("selectedSection");
		}
	  }
  
	  function handleResponse()
	  {
		if(http.readyState == 4 && http.status == 200)
		{
		  //get the data
		  var hold = http.responseText;
		  //send to function to display
		  resultDisplay(hold);
		}
	  }

	  //function to display the results
	  function resultDisplay(d)
	  {
		document.getElementById('dynamicContent').innerHTML = d;
	  }