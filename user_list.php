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
		    <li class="menuitem"><a href="admin_temp_welcome.php">HOME</a><a href=""></a><a href="report.php">REPORTS</a></li>
		    <li class="menuitem"><a href=""></a><a href="logout.php">LOGOUT</a><a href="logout.php"></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
		<div id="content">
        	<h2>&nbsp;</h2>
<p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="286" border="0" align="center">
  <tr>
    <td><strong>LIST OF ALL USERS</strong></td>
  </tr>
  <tr>
    <td>------------------------------</td>
  </tr>
</table>
<?php
  error_reporting(0);    
include 'connect.php';



$query = mysql_query("SELECT * FROM user");


echo "<table border='1' align='center'>
<tr>
<th>User ID</th>
<th>User Name</th>
<th>User Password</th>
<th>Department Name</th>
</tr>";


while($row = mysql_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" .$row['department_name'] . "</td>";
} 


?>
  </div>
   </div>
</body>
</html>
