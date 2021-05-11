<?php

include 'connect.php';

session_start();

$user_id=$_POST['userid'];

$dep_name=$_POST['dep_name'];

$query2 =mysql_query("SELECT * FROM user");


while($record =  mysql_fetch_array($query2))
{
	
	if($record['user_id'] == $user_id && $record['department_name'] == $dep_name)
	{

$query = "DELETE FROM user WHERE user_id ='$user_id'";
			
			mysql_query($query) or die('Error, query failed');
			
			echo 'SUCCESSFULLY USER DELETED ...';
						echo "<br><br><b><center><blink>Please Wait....While we Redirect You ...</blink></b></center>" ;
			
			$time = 5; //Time (in seconds) to wait.
		 $url = "admin_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
	 break;
	}
	
	else 	if($record['user_id'] == $user_id && $record['department_name'] != $dep_name)
	
		{
			echo '<center><font color="red"> ERROR</center></font>';
			echo '<center>----------</center>';
		
		echo '</br><center><strong>   '.$user_id.'</strong>   is not belong to <strong>' . $dep_name.'</strong> Department</center>';
					echo '</br><center><font color="blue"> REDIRECTING.....</center></font>';
					$time = 5; //Time (in seconds) to wait.
		 $url = "admin_temp_welcome.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
		}
		else
	continue;
	}



?>