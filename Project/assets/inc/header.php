<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="<?php echo $path;?>assets/css/style.css" rel="stylesheet">
    <title>Learn Unix: <?php echo $page; ?></title>
    <script>
    function go(){
    	<?php
    		// press button to open tutorial step
    		if($_GET['nav']=='intro'){
    			echo 'document.getElementById("intro1.1").click();';
    			echo 'document.getElementById("label").className = "selectedTutorial";';
    		}else if($_GET['nav']=='fs'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle2").click();';
    			echo 'document.getElementById("filestructure1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label2").className = "selectedTutorial";';
    		}else if($_GET['nav']=='help'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle3").click();';
    			echo 'document.getElementById("help1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label3").className = "selectedTutorial";';
    		}else if($_GET['nav']=='cf'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle4").click();';
    			echo 'document.getElementById("createfile1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label4").className = "selectedTutorial";';
    		}else if($_GET['nav']=='fp'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle5").click();';
    			echo 'document.getElementById("filepermissions1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label5").className = "selectedTutorial";';
    		}else if($_GET['nav']=='ssh'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle6").click();';
    			echo 'document.getElementById("ssh1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label6").className = "selectedTutorial";';
    		}else if($_GET['nav']=='ri'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle7").click();';
    			echo 'document.getElementById("remoteintro1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label7").className = "selectedTutorial";';
    		}else if($_GET['nav']=='tc'){
    			echo 'document.getElementById("toggle").click();';
    			echo 'document.getElementById("toggle8").click();';
    			echo 'document.getElementById("tutcont1.1").click();';
    			echo 'document.getElementById("label").classList.remove("selectedTutorial");';
    			echo 'document.getElementById("label8").className = "selectedTutorial";';
    		}
    	?>
    }
    
    
    </script>
    
  </head>
  <body onload="go()">
    <div id="wrapper"> <!-- Everything other than the body / Background color of the website. -->
      <div id="content"> <!-- Everything within the wrapper. Used to create consistent padding between the content area and background. -->
		<span id="headerlogo"><a <?php if($page =='home') {echo 'class="active"';} ?> href="<?php echo $path;?>"><img id="logo" src="<?php echo $path;?>assets/images/logo.png" alt="Team 2 Logo">Learn Unix!</a></span>
        <ul class="topnav">
          <li><a <?php if($page =='home') {echo 'class="active"';} ?> href="<?php echo $path;?>">Home</a></li>
          <li><a <?php if($page =='tutorial') {echo 'class="active"';} ?> href="<?php echo $path;?>pages/tutorial.php">Tutorials</a></li>
          <li><a <?php if($page =='glossary') {echo 'class="active"';} ?> href="<?php echo $path;?>pages/glossary.php">Glossary</a></li>
          <li><a <?php if($page =='resources') {echo 'class="active"';} ?> href="<?php echo $path;?>pages/resources.php">Resources</a></li>    
          <li class="right"><a <?php if($page =='contact') {echo 'class="active"';} ?> href="<?php echo $path;?>pages/contact.php">Contact</a></li>
        </ul>