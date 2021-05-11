<?php

  error_reporting(0);      
include 'connect.php';

$username = $_POST['username'];

$pass = $_POST['password'];

$query =mysql_query("SELECT * FROM admin");
		 
$numros = mysql_num_rows($query);

if($numros !=0)
	{

		while($row=mysql_fetch_assoc($query))	
		{	
//			 "entering into while";

			$dbusername = $row['username'];
     		$dbpassword = $row['password'];
			if($username == $dbusername && $pass == $dbpassword)
			break;

			}
			
	}

		

			if($username == $dbusername && $pass == $dbpassword)
{

session_start();
		   $_SESSION['admin_username']=$username;
	   	   $_SESSION['admin_password']=$pass;
		   //header( 'location:http://localhost/filedemo/department/department_welcome.html' ) ;

//echo "<br><br><center><b>User Deleted From the Database</b></center><br><br>click here <a href='adminwelcome.php'>to return Home Page";
}
else
{
echo die("<br>SORRY Entered Username or Password does not exist in Database <br><br><br>Click here<a href='admin_login.php'>Try Again</a>");
}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>HOME</title>
</head>

<body>
<div id="container">
		<div id="mainpic"></div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.html"></a></li>
                <li class="menuitem"><a href="index.html"></a><a href="admin_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
                <li class="menuitem"><a href="index.html"></a><a href="#"></a></li>
                <li class="menuitem"></li>
              <li class="menuitem"></li>
            </ul>
        </div>
        
		<div id="content">
        	<h2>&nbsp;</h2>
        	<h2>&nbsp;</h2>
        	<h2>&nbsp;</h2>
        	<h2>&nbsp;</h2>
       	  <h2>WELCOME ADMIN..</h2>
            <p>&nbsp;</p>
            <table width="600" border="1" align="center">
              <tr>
                <td><strong>SELECT THE OPERATION</strong></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><a href="adduser.php">Add User</a></td>
              </tr>
              <tr>
                <td><a href="add_department.php">Add Department</a></td>
              </tr>
              <tr>
                <td><a href="admin_file_status.php">Check File Status</a></td>
              </tr>
              <tr>
                <td height="23"><a href="delete_user.php">Delete User</a></td>
              </tr>
              <tr>
                <td height="23"><a href="change_pass.php">Change Password</a></td>
              </tr>
              <tr>
                <td height="23"><a href="report.php">Generate Report</a></td>
              </tr>
            </table>
            <p>&nbsp;</p>
        	<p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
	  </div>
</div>
</body>
</html>

