<?php

include 'connect.php';

$login_id = $_POST['loginid'];
$pass = $_POST['password'];
$department = isset($_POST['dept']) ? $_POST['dept'] : "" ;
$query =mysql_query("SELECT * FROM user");

 
$numros = mysql_num_rows($query);

if($numros !=0)
	{

		while($row=mysql_fetch_assoc($query))	
		{	
//			 "entering into while";

			$dbuserid = $row['user_id'];
			$dbusername = $row['user_name'];
     		$dbpassword = $row['password'];
			$dbdepartment=$row['department_name'];
			if($login_id == $dbuserid && $pass == $dbpassword  && $department == $dbdepartment)
			goto suc;

			}
			
	}

		suc:

			if($login_id == $dbuserid && $pass == $dbpassword && $department == $dbdepartment)
{

session_start();
		   $_SESSION['username']=$login_id;
		   //header( 'location:http://localhost/filedemo/department/department_welcome.html' ) ;

//echo "<br><br><center><b>User Deleted From the Database</b></center><br><br>click here <a href='adminwelcome.php'>to return Home Page";
}
else
{
echo die("<br>SORRY Entered Username or Password does not exist in Database <br><br><br>Click here<a href='login_page.php'>Try Again</a>");
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="log_welcome.php">
  <p>ENTER INTO HOME PAGE</p>
    <input type="hidden" name="loginid" value="<?php echo $login_id ?>">
  <input type="hidden" name="password" value="<?php echo $pass ?>">
  <input type="hidden" name="dept" value="<?php  echo $department?>">
 <input type="hidden" name="dbuser_name" value="<?php  echo $dbusername?>">

  <p>
    <input type="submit" name="submit" id="submit" value="enter" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>