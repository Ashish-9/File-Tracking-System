<?php
/*
include 'connect.php';

session_start();


$dep_id=$_POST['dep_id'];
$dep_name=$_POST['dep_name'];


$query = "INSERT INTO department VALUES 	('$dep_id','$dep_name',NOW())";
			
			mysql_query($query) or die('Error, query failed');
			
			echo 'SUCCESSFULLY DEPARTMENT ADDED ...';
			
			echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			$time = 5; //Time (in seconds) to wait.
		 $url = "admin_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
		// break;
*/

			
			echo 'SUCCESSFULLY DEPARTMENT ADDED ...';
			
			echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			$time = 5; //Time (in seconds) to wait.
		 $url = "admin_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 

?>