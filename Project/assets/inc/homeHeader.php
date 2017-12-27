<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="<?php echo $path;?>assets/css/style.css" rel="stylesheet">
    <title>Learn Unix: <?php echo $page; ?></title>    
  </head>
  <body onload="dynamicLoader()">
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