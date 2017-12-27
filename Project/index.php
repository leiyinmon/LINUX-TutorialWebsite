        <?php
        	$title="Team 2 Tutorials: Home";
			$page="home";
			$path='./';
			include($path.'assets/inc/homeHeader.php');
        ?>
		<!--<img id="homeimage" src='WelcomeFancy.png' alt ='Web image'>-->
		<div class="clearfix"></div>
		<div class='spangroup'>
		<fieldset class="tipoftheday"><legend>Welcome!</legend>
		 <h2>Click one of the eight tutorials below to learn everything you need to know when working with the UNIX command line. </h2>
		<p>By the most simple definition, UNIX is a computer operating system - the base software that controls a computer system and its peripherals.</p>
		<p> Typically, we use our mouse and fingers to communicate with our devices running Unix operating systems. However, the command line is a quick, powerful,
		  text-based interface that developers use to more effectively and efficiently communicate with computers to accomplish a wider set of tasks. </p>

		</fieldset>
		<div class="clearfix"></div>
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=intro"><span class='indexboxes blue' style='color:black;'><span class="spanTitle"> Introduction to UNIX & Terminal </span>
			Learn the history behind UNIX, what UNIX actually is, and how to access the terminal.
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=fs"><span class='indexboxes pink' style='color:black;'><span class="spanTitle">Navigating the Command Line</span>
			Get comfortable with the command line and some basic navigation commands.
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=help"><span class='indexboxes green' style='color:black;'><span class="spanTitle">Displaying Help Information </span>
			Learn how to use the linux man pages to search for help with unknown or unfamiliar commands.
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=cf"><span class='indexboxes orange' style='color:black;'><span class="spanTitle"> Basic File Management </span> 
			Create, modify, save and copy files to new locations 
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=fp"><span class='indexboxes blue' style='color:black;'><span class="spanTitle"> File Permissions </span> 
			Understand the mystery behind UNIX file permissions and learn how to add and remove them.
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=ssh"><span class='indexboxes pink' style='color:black;'><span class="spanTitle"> Logging In To Remote Devices</span> 
			Get familiar with SSH and how to log in to your UNIX devices remotely.
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=ri"><span class='indexboxes green' style='color:black;'><span class="spanTitle">Remote File Management</span> 
			Manage your files and folders remotely using secure copy.
			</span></a> 
			<a href ="http://kelvin.ist.rit.edu/~team2/Project/pages/tutorial.php?nav=tc"><span class='indexboxes orange' style='color:black;' onclick="dynamicLoader()"><span class="spanTitle">Tutorial Conclusion</span> 
			Summarize what's been covered in this UNIX tutorial. 
			</span></a> 
		 </div>
		 <div class="clearfix"></div>
		 <fieldset class="tipoftheday" id="dynamicContent"><legend>Command Line Tip:</legend></fieldset>
        <div class="clearfix"></div>
      </div>
    </div>
	<script src="assets/script/homeScript.js"></script>
  </body>
</html>