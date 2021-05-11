<?php

include 'connect.php';
$query =mysql_query("SELECT * FROM file_transaction");
$department_name_from= $_POST['dep_name_from'];
$file_id=$_POST['check_in'];

if ( isset( $_POST['accept'] ) ) 
{
	if($file_id == "")
	{
		echo '<b>Please Select The file..</b>';
			$time = 2; //Time (in seconds) to wait.
			$url = "check_in.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}
	
	
	while ($record = mysql_fetch_array($query))
	{
		if($record['send_dep_name_to'] == $department_name_from && $record['dispatch_status']== "TRUE" && $record['received']== "FALSE" && $record['file_id'] == $file_id )
		{	
			$query2 =mysql_query("	UPDATE file_transaction SET received ='TRUE' , current_location='$department_name_from',file_status = 'PROCESSING' WHERE send_dep_name_to = '$department_name_from' AND file_id='$file_id' "); 

			echo 'SUCCESSFULLY RECEIVED THE FILE<br><br>';
			echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; //Time (in seconds) to wait.
			$url = "log_temp_welcome.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}
	else if($record['send_dep_name_to'] == $department_name_from && $record['dispatch_status']== "TRUE" && $record['received']== "TRUE" && $record['file_id']== $file_id )
	 	{
				echo 'THIS FILE IS ALREADY RECIEVED BY ANOTHER USER<br><br>';
			echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; //Time (in seconds) to wait.
				$url = "check_in.php"; //Location to send to.
				header("Refresh: $time; url=$url"); 
				
		}
	else
			continue;
	}

}

if ( isset( $_POST['reject'] ) ) 
{
		if($file_id == "")
	{
		echo '<b>Please Select The file..</b>';
			echo '<br><br>REDIRECT You to Home Page';
			$time = 4; //Time (in seconds) to wait.
			$url = "check_in.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}

	
	
	
while ($record = mysql_fetch_array($query))
	{
		if($record['send_dep_name_to'] == $department_name_from && $record['dispatch_status']== "TRUE" && $record['received']== "TRUE"  && $record['file_id'] == $file_id )
		{	
			$query2 =mysql_query("	UPDATE file_transaction SET received ='FALSE', file_status= 'REJECTED' WHERE send_dep_name_to = '$department_name_from' AND file_id='$file_id'");

			echo 'SUCCESSFULLY REJECTED THE FILE<br><br>';
					echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; //Time (in seconds) to wait.
				$url = "check_in.php"; //Location to send to.
				header("Refresh: $time; url=$url"); 
		}
		
	else if($record['send_dep_name_to'] == $department_name_from && $record['dispatch_status']== "TRUE" && $record['received']== "FALSE" && $record['file_id'] == $file_id  )
		{
			echo 'THIS FILE IS ALREADY REJECTED BY ANOTHER USER<br><br>';
			echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; //Time (in seconds) to wait.	
			$url = "check_in.php"; //Location to send to.
				header("Refresh: $time; url=$url"); 

		}
	else
		continue;
	}
 
}

if ( isset( $_POST['dispatch_file'] ) ) 
{
		if($file_id == "")
	{
		echo '<b>Please Select The file..</b>';
			$time = 2; //Time (in seconds) to wait.
			$url = "check_in.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}

else if($file_id != "")	
	{
echo 'DISPATCHING THE FILE...';
$time = 1; //Time (in seconds) to wait.
$url = "dispatch_file.php"; //Location to send to.
header("Refresh: $time; url=$url"); 
	}

	}

if ( isset( $_POST['sanction'] ) ) 
{
	if($file_id == "")
	{
		echo '<b>Please Select The file..</b>';
			$time = 2; //Time (in seconds) to wait.
			$url = "check_in.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}
	
	
	while ($record = mysql_fetch_array($query))
	{
		if($record['send_dep_name_to'] == $department_name_from && $record['dispatch_status']== "TRUE" && $record['received']== "TRUE" && $record['file_id'] == $file_id )
		{	
			$query2 =mysql_query("	UPDATE file_transaction SET received ='TRUE' , current_location='$department_name_from',file_status = 'SANCTIONED' WHERE send_dep_name_to = '$department_name_from' AND file_id='$file_id' "); 

			echo 'SUCCESSFULLY SANCTIONED THE FILE<br><br>';
			echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; //Time (in seconds) to wait.	
			$url = "log_temp_welcome.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}
		else if($record['send_dep_name_to'] == $department_name_from && $record['dispatch_status']== "TRUE" && $record['received']== "FALSE" && $record['file_id'] == $file_id )
		{	
		

			echo 'PLEASE... First Accept The File.. Then only You Are able To SANCTION the file<br><br>';
			$time = 6; //Time (in seconds) to wait.
			$url = "log_temp_welcome.php"; //Location to send to.
			header("Refresh: $time; url=$url"); 

		}
	else
			continue;
	}

}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
</body>
</html>