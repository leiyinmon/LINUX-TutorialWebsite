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

  // We create the HTTP Object
  var http = getHTTPObject();

  //Function to load dynamic content
  function dynamicLoader()
  {
    //if the http object exists..
    if(http)
    {
	  var tipNum = 1 + Math.floor(Math.random() * 12);
      //set up the object
      http.open("get", "pages/updateTip.php?contentID=" +tipNum, true);
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