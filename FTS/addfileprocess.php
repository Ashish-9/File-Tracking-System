<?php
/*
include 'connect.php';

session_start();
$user_id=$_SESSION['user_id'];

$fid=$_POST['fileid'];
$file_name=$_POST['fname'];
$dep_name=$_POST['dep_name'];


$query = "INSERT INTO file VALUES 	('$fid','$file_name','$dep_name','0',NOW())";
			
			mysql_query($query) or die('Error, query failed');
			
			echo 'SUCCESSFULLY FILE ADDED ...';
						echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			
			$time = 5; //Time (in seconds) to wait.
		 $url = "log_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
		// break;
*/

			echo 'SUCCESSFULLY FILE ADDED ...';
						echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			
			$time = 5; //Time (in seconds) to wait.
		 $url = "log_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 


?>