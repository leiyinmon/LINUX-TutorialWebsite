        <?php
        	$title="Team 2 Unix: Resources";
			$page="resources";
			$path='./../';
			include($path.'assets/inc/header.php');
			
			include "../../../DBConnect.php";
			
			//check connection is good
		if($conn){			
			//get all of the table
			$result = $conn->query("SELECT page, content FROM pages");
			if($result){
				while($tempRow = mysqli_fetch_array($result,MYSQL_ASSOC)){
					$records[]=$tempRow;
				}
			}
		}
        ?>
		
        <div class="clearfix">
          <div class="singleboxpage">
            <fieldset class="content-box">
            	<legend>Resources</legend>
				<div class = 'reflinks'>
					<?php						 
						foreach($records as $this_row){
							if($this_row['page'] == $page)
							{
								echo $this_row['content'];
							}
						}
					?>
				</div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>