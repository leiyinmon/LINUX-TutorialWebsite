var param1var = getQueryVariable("param1");

function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  return query;
}

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
  //HTML id of currently selected tutorial
  var tutorial = 'intro1.1';
  
  //previously selected tutorial
  var prevTut = 'intro1.1';
  var selected = null;
  
  //num that correlates to DB id
  var idNum = 1;
  
  function validateForm() {
    if ($_GET['touch'] == "") {
        alert("Command must be filled out");
        return false;
    }
}

  function sectionSelect(_selected, _idNum)
  {
	prevTut = tutorial;
	selected = _selected;
    tutorial = selected.id;
    
	//Coloring
	if(tutorial == "next")
	{
		console.log(document.getElementsByClassName('selectedSection')[0].nextSibling.nextSibling);
  		document.getElementsByClassName('selectedSection')[0].nextSibling.nextSibling.classList.add('selectedSection');
  		document.getElementsByClassName('selectedSection')[0].classList.remove('selectedSection');
		console.log("Next");
	}else if(tutorial == "previous"){
		var x = document.getElementsByClassName('selectedSection')[0];
		console.log(document.getElementsByClassName('selectedSection')[0].previousSibling.previousSibling);
  		x.previousSibling.previousSibling.classList.add('selectedSection');
  		console.log(x.previousSibling.previousSibling.classList);
  		x.classList.remove('selectedSection');
  		console.log("Previous");
	}else{
		console.log("Section");
		removeColor();
	}
	
	//if pressed was next/previous, don't change idNum
	if(! (_idNum == -1))
	{
		idNum = _idNum;
		//console.log("num updated" +idNum);
	}
	
	//if I go after the one I clicked on _selected
		//do I hve a next sibling?
			//if(_selected.nextSibling())
	
	//if next/prev increment/decrement idNum
	if(tutorial == "next"){
	console.log(idNum);
		idNum++;
		//console.log("Incremented ID" + idNum);
		console.log(idNum);
	}else if(tutorial == "previous"){
		idNum--;
		//console.log("Decremented ID" +idNum);
	}
	
	if(tutorial == "next")
	{
		if(! (idNum == 48))
		{
			//console.log("Colored Page" +idNum);
			console.log(idNum);
			buttonDynamicLoader();
		}
	}else if(tutorial == "previous"){
		if(! (idNum == 0))
		{
			//console.log("Colored Page" +idNum);
			buttonDynamicLoader();
		}
	}else{
		dynamicLoader();
		changeColor();
	}
  }
  
  function changeLabelColor(label)
  {
	var labelClasses = label.classList;
	labelClasses.toggle("selectedTutorial");
  }
  
  function changeColor()
  {
	var classes = document.getElementById(tutorial).classList;
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
  
  // We create the HTTP Object
  var http = getHTTPObject();

  //Function to load dynamic content
  function dynamicLoader()
  {
    //if the http object exists..
    if(http)
    {
      //set up the object
      http.open("get", "updateContent.php?contentID=" +tutorial, true);
      //set up the callback
      http.onreadystatechange = handleResponse;
      //send it off
      http.send();
    }
  }
  
  //Function to load dynamic content
  function buttonDynamicLoader()
  {
    //if the http object exists..
    if(http)
    {
      //set up the object
      http.open("get", "updateContentButton.php?contentID=" +idNum, true);
      //set up the callback
      http.onreadystatechange = handleResponse;
      //send it off
      http.send();
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
  