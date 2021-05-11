<?php
  error_reporting(0);    
include "connect.php"; 

	session_start();

$query =mysql_query("SELECT * FROM department");
$query2 =mysql_query("SELECT * FROM user");
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
		    <li class="menuitem"><a href=""></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
		<div id="content">
        	<h2>&nbsp;</h2>
<p>&nbsp;</p>
       	  <form id="form1" name="form1" method="post" action="delete_user_process.php">
        	  <p>&nbsp;</p>
        	  <table width="200" border="0" align="center">
        	    <tr>
        	      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	        <p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deleting User...</em></strong></p>
        	        <p>&nbsp;</p></td>
      	      </tr>
        	    <tr>
        	      <td><label for="userid">User Id:</label></td>
        	      <td><select name="userid" id="userid2">
        	        <option value = "">Select User ID </option>
        	        <option value = "" disabled="disabled">----------------------------- </option>
        	        <?php

while ($record = mysql_fetch_array($query2))
{

	echo '<option value="' .$record['user_id'] .'">' . $record['user_id'] . '</option>';
	
} ?>
      	        </select></td>
      	      </tr>
        	    <tr>
        	      <td>Department</td>
        	      <td><select name="dep_name" id="dep_name2">
        	        <option value = "">Select Department </option>
        	        <option value = "" disabled="disabled">----------------------------- </option>
        	        <?php

while ($record = mysql_fetch_array($query))
{
	if($record['dep_name']!=$department_name_from)
	echo '<option value="' .$record['dep_name'] .'">' . $record['dep_name'] . '</option>';
	else
	continue;
} ?>
      	        </select></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2"></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2">&nbsp;&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td colspan="2">&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	        <input type="submit" name="submit" id="submit" value="Delete user" /></td>
      	      </tr>
      	    </table>
        	  <p>&nbsp;</p>
        	  <p>&nbsp;</p>
      	  </form>
        	<p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
  </div>
</div>
</body>
</html>
