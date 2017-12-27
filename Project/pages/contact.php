        <?php
        	$title="Team 2 Unix: Contact Us";
			$page="contact";
			$path='./../';
			include($path.'assets/inc/header.php');
        ?>
		
        <div class="clearfix">
          <div class="column contactmenu">
            <ul>
              <li id="brendan" class="inactiveSection selectedSection" onclick="sectionSelect(this)">Brendan McGeever</li>
              <li id="erica" class="inactiveSection" onclick="sectionSelect(this)">Erica Parker</li>
              <li id="kengar" class="inactiveSection" onclick="sectionSelect(this)">Kengar Dongatron (Ken Clark)</li>
              <li id="kevin" class="inactiveSection" onclick="sectionSelect(this)">Kevin Reynolds</li>
			  <li id="lei" class="inactiveSection" onclick="sectionSelect(this)">Lei Mon</li>
            </ul>
          </div>

          <div class="column text contact">
            <fieldset class="content-box">
              <legend>About</legend>
				<div class="contact-box" id="dynamicContent">
					<img src="../assets/images/brendan.png" alt="Brendan" id="contactImg">
					<h2>Name:</h2>
						<p>Brendan McGeever </p>
					<h2> From:</h2>
						<p> Boulder, CO</p>
					<h2> Education:</h2>
						<p> Completed his Bachelor of Arts in Political Science at Colorado State University in Fort Collins, CO, and spent several years after his time at CSU traveling and working in the retail industry.</p>
					<h2> Hobbies:</h2>
						<p> His hobbies include tinkering with Raspberry Pi computers, climbing mountains, and attending video gaming conferences and expo's as often as possible.</p>
				</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
	<script src="../assets/script/contactScript.js"></script>
  </body>
</html>