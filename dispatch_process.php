<?php 
include 'connect.php';

session_start();
$user_id=$_SESSION['user_id'];

$fid=$_POST['file_id'];
$dep_name_to=$_POST['dep_name'];
$dep_name_from=$_POST['dep_name_from'];
$rem=$_POST['remarks'];

$flag='0';

$query2 =mysql_query("SELECT * FROM file");
$query1 =mysql_query("SELECT * FROM file_transaction");


while($record =  mysql_fetch_array($query2))
	{
		if($fid == $record['file_id'] && $record['dispatch_stat'] == '0')
		{
					$flag='1';
					break;
		}
		else
					$flag='0';
		
	}


if($flag=='1')
		{
			
			$query_w = "INSERT INTO file_transaction VALUES 	('$user_id','$fid','$dep_name_from','$dep_name_to','$rem','TRUE','FALSE','$dep_name_from','PROCESSING',NOW())";
			
			mysql_query($query_w) or die('Error, query failed');
			
			mysql_query("	UPDATE file SET dispatch_stat =1 WHERE file_id = '$fid'");
			 echo 'SUCCESSFULLY DISPATCHED TO - '.$dep_name_to.' Department<br><br>';
					
		 			echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; 
		 $url = "log_temp_welcome.php"; 
		 header("Refresh: $time; url=$url"); 
		// break;
			
		}
			
	
		else if($flag=='0')
		
		{
			while ($record_w = mysql_fetch_array($query1))
	{

		if($dep_name_to == $record_w['send_dep_name_from'] && $record_w['dispatch_status']== "TRUE" && $record_w['received']== "TRUE" && $record_w['file_id'] == $fid )
	{
			$query_n =mysql_query("INSERT INTO file_transaction VALUES ('$user_id','$fid','$dep_name_from','$dep_name_to','$rem','TRUE','FALSE','$dep_name_from',NOW())");
 
 echo 'SUCCESSFULLY DISPATCHED TO - '.$dep_name_to.' Department<br><br>';
 
 				echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; 
		 $url = "log_temp_welcome.php"; 	
		 header("Refresh: $time; url=$url"); 
		 break;

	}
	

	
	else if($dep_name_to != $record_w['send_dep_name_from'] && $record_w['file_id'] == $fid && $record_w['dispatch_status']== "TRUE" && $record_w['received'] == "TRUE")
		{	

$query_nw = "INSERT INTO file_transaction VALUES 	('$user_id','$fid','$dep_name_from','$dep_name_to','$rem','TRUE','FALSE','$dep_name_from','PROCESSING',NOW())";
mysql_query($query_nw) or die('Error, query failed');
			 echo 'SUCCESSFULLY DISPATCHED TO - '.$dep_name_to.' Department<br><br>';
			
					echo '<blink>Please Wait...</blink>We REDIRECT You to Home Page';
			$time = 4; 
		 $url = "log_temp_welcome.php"; 
		 header("Refresh: $time; url=$url"); 
		 break;
		}
			
			}
}


?>