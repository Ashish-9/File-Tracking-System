<?php
  error_reporting(0);      
include "connect.php"; 
$query =mysql_query("SELECT * FROM department");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>LOGIN PAGE</title>
<style type="text/css">
.cs {	font-family: "Courier New", Courier, monospace;
}
.cs {	font-family: Verdana, Geneva, sans-serif;
}
.cs {	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
<div id="container">
		<div id="mainpic"></div>
		<div id="menu">
		  <ul>
		    <li class="menuitem"><a href="index.html">Home</a></li>
		    <li class="menuitem"><a href="about.php">About</a></li>
		    <li class="menuitem"><a href="gallrey.php">Gallery</a></li>
		    <li class="menuitem"><a href="uml.php">UML Diagram</a></li>
		    <li class="menuitem"><a href="design.php">Design</a></li>
		    <li class="menuitem"><a href="login_page.php">LOG IN</a></li>
	      </ul>
  </div>
		<div id="content">
       	  <h2>&nbsp;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="224" border="0" align="center" class="cs">
  <tr>
    <td width="214" bgcolor="#FFFFFF"><p class="cs"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>    
      <strong><h1>LOG IN PANEL</h1></strong></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><a href="admin_login.php">ADMIN LOGIN</a></strong><img src="images/admin_icon.jpg" alt="admin" width="50" height="44" /></p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="log_welcome.php">
  <table width="200" border="0" align="center">
    <tr>
      <td><label for="loginid2"   class="LabelColor">Login ID</label>
        : </td>
      <td><input type="text" name="loginid" id="loginid2" /></td>
    </tr>
    <tr>
      <td><label for="password2">Password</label>
        : </td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Department:</td>
      <td><select name="dept" >
        <option value = ""  >Select Department </option>
        <option value = "" disabled="disabled">-------------------------- </option>
        <?php

while ($record = mysql_fetch_array($query))
{
	echo '<option value="' .$record['dep_name'] .'">' . $record['dep_name'] . '</option>';
	
} ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" id="Submit" value="LOG IN " /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
  </div>
   </div>
</body>
</html>
