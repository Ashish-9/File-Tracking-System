<?php

/*include 'connect.php';

session_start();

$username=$_POST['user_name'];
$userid=$_POST['user_id'];
$pass=$_POST['pass'];
$dep_name=$_POST['dep_name'];







$query = "INSERT INTO user VALUES 	('$userid','$username','$pass','$dep_name',NOW())";
			
			mysql_query($query) or die('Error, query failed');
			
			echo 'SUCCESSFULLY USER ADDED ...';
			
						echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			$time = 5; //Time (in seconds) to wait.
		 $url = "admin_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
		// break;
*/

			echo 'SUCCESSFULLY USER ADDED ...';
			
						echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			$time = 5; //Time (in seconds) to wait.
		 $url = "admin_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 

?>