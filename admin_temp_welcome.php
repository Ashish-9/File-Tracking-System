<?php
session_start();
if( !isset($_SESSION['admin_username']) )
 {   
   			$time = 3; //Time (in seconds) to wait.
		 $url = "login_page.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
 die( "<br><br><b><center><blink>Login required....</blink></b></center>" );

 }
 else
 {}
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
		    <li class="menuitem"><a href=""></a></li>
		    <li class="menuitem"><a href=""></a><a href="admin_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
		    <li class="menuitem"><a href="index.html"></a><a href="#"></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
		<div id="content">
        	<h2>&nbsp;</h2>
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
        	    <td><a href="delete_user.php">Delete User</a></td>
      	    </tr>
        	  <tr>
        	    <td><a href="change_pass.php">Change Password</a></td>
      	    </tr>
        	  <tr>
        	    <td><a href="report.php">Generate Report</a></td>
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
