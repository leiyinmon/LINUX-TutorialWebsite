<?php
$title="Team 2 Unix: Tutorials";
$page="tutorial";
$path='./../';
include($path.'assets/inc/header.php');
?>
</div>
<button id='button'>☰</button>
<div class="clearfix">
  <div id="hamburger"> <!-- Hambuger -->
  <div class="column menu">
    <input id="toggle" type="checkbox" checked>
    <label id="label" for="toggle" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial selectedTutorial">Introduction to UNIX & Terminal </label>
    <div id="expand">
      <section>
        <ul>
          <li id = 'intro1.1' class="selectedSection inactiveSection" onclick="sectionSelect(this, 1)">Tutorial Introduction</li>
          <li id = 'whatsunix1.1' class="inactiveSection" onclick="sectionSelect(this, 2)">What's UNIX?</li>
          <li id = 'whatsunix1.2' class="inactiveSection" onclick="sectionSelect(this, 3)">What's UNIX? cont.</li>
          <li id = 'whatsunix1.3' class="inactiveSection" onclick="sectionSelect(this, 4)">What is a Terminal?</li>
          <li id = 'whatsunix1.4' class="inactiveSection" onclick="sectionSelect(this, 5)">Files vs. Processes</li>
          <li id = 'terminal1.1' class="inactiveSection" onclick="sectionSelect(this, 6)">Opening the Terminal</li>
          <li id = 'introQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
        </ul> 
      </section>
    </div><br/>
    <input id="toggle2" type="checkbox">
    <label id="label2" for="toggle2" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">Navigating the Command Line</label>
    <div id="expand2">
      <section>
        <ul>
          <li id = 'filestructure1.1' class="inactiveSection" onclick="sectionSelect(this, 7)">UNIX File Hierarchy</li>
          <li id = 'terminal2.1' class="inactiveSection" onclick="sectionSelect(this, 8)">Print Working Directory</li>
          <li id = 'introcommands1.1' class="inactiveSection" onclick="sectionSelect(this, 9)">Listing Public and Hidden Files</li>
          <li id = 'introcommands1.2' class="inactiveSection" onclick="sectionSelect(this, 10)">Making a Directory</li>
          <li id = 'introcommands1.3' class="inactiveSection" onclick="sectionSelect(this, 11)">Changing Directories</li>
          <li id = 'introcommands1.4' class="inactiveSection" onclick="sectionSelect(this, 12)">Removing Directories</li>
          <li id = 'commandQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
        </ul>
    </section>
    </div><br/>
    <input id="toggle3" type="checkbox">
    <label id="label3" for="toggle3" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">Displaying Help Information </label>
    <div id="expand3">
      <section>
        <ul>
          <li id = 'help1.1' class="inactiveSection" onclick="sectionSelect(this, 13)">Introduction to Man Pages</li>
          <li id = 'help1.2' class="inactiveSection" onclick="sectionSelect(this, 14)">Using 'man'</li>
          <li id = 'help1.3' class="inactiveSection" onclick="sectionSelect(this, 15)">Using 'man' cont.</li>
          <li id = 'helpQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
        </ul> 
      </section>
    </div><br/>
    <input id="toggle4" type="checkbox">
    <label id="label4" for="toggle4" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">Basic File Management</label>
    <div id="expand4">
      <section>
        <ul>
          <li id = 'createfile1.1' class="inactiveSection" onclick="sectionSelect(this, 16)">Creating a File</li>
          <li id = 'editfile1.1' class="inactiveSection" onclick="sectionSelect(this, 17)">Editing Files - vim</li>
          <li id = 'editfile1.2' class="inactiveSection" onclick="sectionSelect(this, 18)">Editing Files - vim cont.</li>
          <li id = 'editfile1.3' class="inactiveSection" onclick="sectionSelect(this, 19)">Editing Files - vim cont.</li>
          <li id = 'editfile1.4' class="inactiveSection" onclick="sectionSelect(this, 20)">Editing Files - vim cont.</li>
          <li id = 'editfile1.5' class="inactiveSection" onclick="sectionSelect(this, 21)">Editing Files - vim cont.</li>
          <li id = 'editfile1.6' class="inactiveSection" onclick="sectionSelect(this, 22)">Editing Files - vim cont.</li>
          <li id = 'editfile1.7' class="inactiveSection" onclick="sectionSelect(this, 23)">Viewing File Contents</li>
          <li id = 'copyfile1.1' class="inactiveSection" onclick="sectionSelect(this, 24)">Copying Files</li>
          <li id = 'copyfile1.2' class="inactiveSection" onclick="sectionSelect(this, 25)">Copying Files cont.</li>
          <li id = 'grep1.1' class="inactiveSection" onclick="sectionSelect(this, 26)">Using grep</li>
          <li id = 'find1.1' class="inactiveSection" onclick="sectionSelect(this, 27)">Using find</li>
          <li id = 'delete1.1' class="inactiveSection" onclick="sectionSelect(this, 28)">Deleting Files</li>
          <li id = 'filemanagementQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
        </ul> 
      </section>
    </div><br/>
    <input id="toggle5" type="checkbox">
    <label id="label5" for="toggle5" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">File Permissions</label>
    <div id="expand5">
      <section>
        <ul>
          <li id = 'filepermissions1.1' class="inactiveSection" onclick="sectionSelect(this, 29)">Introduction to File Permissions</li>
          <li id = 'filepermissions1.2' class="inactiveSection" onclick="sectionSelect(this, 30)">Introduction to File Permissions cont.</li>
          <li id = 'viewpermissions1.1' class="inactiveSection" onclick="sectionSelect(this, 31)">Viewing File Permissions</li>
          <li id = 'viewpermissions1.2' class="inactiveSection" onclick="sectionSelect(this, 32)">Viewing File Permissions cont.</li>
          <li id = 'viewpermissions1.3' class="inactiveSection" onclick="sectionSelect(this, 33)">Viewing File Permissions cont.</li>
		  <li id = 'addpermissions1.1' class="inactiveSection" onclick="sectionSelect(this, 34)">Adding File Permissions</li>
          <li id = 'removepermissions1.1' class="inactiveSection" onclick="sectionSelect(this, 35)">Removing File Permission cont.</li>
          <li id = 'filepermissionsQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
        </ul> 
      </section>
    </div><br/>
    <input id="toggle6" type="checkbox">
    <label id="label6" for="toggle6" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">Logging In To Remote Devices</label>
    <div id="expand6">
      <section>
        <ul>
          <li id = 'ssh1.1' class="inactiveSection" onclick="sectionSelect(this, 36)">Introduction to SSH</li>
          <li id = 'ssh1.2' class="inactiveSection" onclick="sectionSelect(this, 37)">Introduction to SSH cont.</li>
          <li id = 'sshkey1.1' class="inactiveSection" onclick="sectionSelect(this, 38)">SSH Keys</li>
          <li id = 'sshpassword1.1' class="inactiveSection" onclick="sectionSelect(this, 39)">SSH Passwords</li>
          <li id = 'sshtest1.1' class="inactiveSection" onclick="sectionSelect(this, 40)">Testing SSH</li>
          <li id = 'sshQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
          
        </ul> 
      </section>
    </div><br/>
    <input id="toggle7" type="checkbox">
    <label id="label7" for="toggle7" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">Remote File Management</label>
    <div id="expand7">
      <section>
        <ul>
          <li id = 'remoteintro1.1' class="inactiveSection" onclick="sectionSelect(this, 41)">Introduction to Remote Management</li>
          <li id = 'scp1.1' class="inactiveSection" onclick="sectionSelect(this, 42)">Introduction to Secure Copy</li>
          <li id = 'copyingremote1.1' class="inactiveSection" onclick="sectionSelect(this, 43)">Copying Remotely</li>
          <li id = 'copyinglocal1.1' class="inactiveSection" onclick="sectionSelect(this, 44)">Copying Locally</li>
          <li id = 'remoteQuiz1' class="inactiveSection" onclick="sectionSelect(this, -1)">Quiz</li>
        </ul> 
      </section>
    </div><br/>
    <input id="toggle8" type="checkbox">
    <label id="label8" for="toggle8" style="cursor:pointer;" onclick="changeLabelColor(this)" class="inactiveTutorial">Tutorial Conclusion</label>
    <div id="expand8">
      <section>
        <ul>
          <li id = 'tutcont1.1' class="inactiveSection" onclick="sectionSelect(this, 45)">Tutorial Conclusion Part 1</li>
          <li id = 'tutcont1.2' class="inactiveSection" onclick="sectionSelect(this, 46)">Tutorial Conclusion Part 2</li>
          <li id = 'tutcont1.3' class="inactiveSection" onclick="sectionSelect(this, 47)">Tutorial Conclusion Part 3</li>
        </ul> 
      </section>
    </div><br/>
    </div> <!-- hamburger -->
  </div>
  
  <div class="column text">
    <fieldset class="content-box" id="dynamicContent">
      <h2>Introduction to UNIX & Terminal</h2>
	  <div class='reflinks blue'><h2>Introduction</h2> </div>
      <p> Hi there! Welcome to the beginning of your UNIX Tutorial!</p>
      <img src="../assets/images/tutorials/0.png" alt="intro">

<p>We know the thought of using a UNIX command line can be kind of intimidating, especially if you're used to working primarily in Microsoft Windows or other user-friendly graphical interfaces.</p>

<p>Not to worry though, this tutorial will take you through opening, getting comfortable with, and working in the UNIX command line. Before you know it, you'll see just how easy it is to work in a terminal, and you may just prefer it over a typical graphical user interface! Anyways, let's get started! 
</p>
		<a style="cursor:pointer;" class="buttons blue" id="introquiz" onclick="sectionSelect(this, -1)">Jump to Section Quiz</a>
	  <a style="cursor:pointer;" class="buttons" id="next" onclick="sectionSelect(this, -1)">Next &raquo;</a>
    </fieldset>
  </div>
</div>
</div>
<script src="../assets/script/tutorialScript.js"></script>
<script>
var button = document.getElementById('button');

button.onclick = function() {
    var div = document.getElementById('hamburger');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};
</script>
</body>
</html>