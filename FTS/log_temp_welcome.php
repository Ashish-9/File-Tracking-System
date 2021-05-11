<?php
  error_reporting(0);    
include 'connect.php';


session_start();
$login_id=$_SESSION['user_id'];
$department=$_SESSION['dep_name'];

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
		    <li class="menuitem"><a href=""></a><a href="log_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
		    <li class="menuitem"><a href=""></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
  <div id="content">
        	<h2>&nbsp;</h2>
<p>&nbsp;</p>
        	<p>&nbsp;</p>
       	  <p>&nbsp;</p>
<table width="600" border="1" align="center">
  <tr>
    <td><strong>SELECT THE OPERATION</strong></td>
  </tr>
  <tr>
    <td><a href="file_process_id.php"></a></td>
  </tr>
  <tr>
    <td><a href="addfile.php?dep_name=<?php echo $department?>&amp; log_id=<?php echo $login_id ?>">ADD FILE</a><a href="dispatch_file.php?dep_name=<?php echo $department?>&amp; log_id=<?php echo $login_id ?>"></a></td>
  </tr>
  <tr>
    <td><a href="dispatch_file.php?dep_name=<?php echo $department?>&amp; log_id=<?php echo $login_id ?>">DISPATCH FILE</a><a href="check_in.php?dep_name=<?php echo $department?>"></a></td>
  </tr>
  <tr>
    <td><a href="check_in.php?dep_name=<?php echo $department?>">CHECK IN</a></td>
  </tr>
  <tr>
    <td><a href="file_process_id.php">TRACK MY FILE</a></td>
  </tr>
</table>
  </div>
   </div>
</body>
</html>
