<?php
	/**
	* Connects to the database.
	* Return false if connection failed.
	*/
	
	//Code header() is to make sure we get new data - clears the cache!
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: text');
	
	//connect
	include "../../../DBConnect.php";
	
	if($conn){
		//if new data was sent in, put in db
		if( isset($_GET['contentID']) )
		{
			//get content from the id and send back as JSON
			$id = $_GET['contentID'];
			$sql = "SELECT title,content FROM tutorials WHERE tutorial ='".$id."';";
			$result = $conn->query($sql);
			
			//turn result into 2d associative array
			if($result){
				while($tempRow = mysqli_fetch_array($result,MYSQL_ASSOC)){
					$records[] = $tempRow;
				}
			}
			if(! $result)
			{
				echo 'failed';
			}
		}
	}
	
	foreach($records as $this_row){
		echo $this_row['content'];
	}
?>