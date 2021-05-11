<?php
  error_reporting(0);    
include "connect.php"; 

	session_start();

$query =mysql_query("SELECT * FROM file");



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
   	<form id="form1" name="form1" method="post" action="admin_file_stat_process.php">
   	  <p> <em>
   	    <label for="file_id"></label>
      </em></p>
        	  <table width="261" height="141" border="0" align="center">
        	    <tr>
        	      <td colspan="2"><strong><em>CHECKING FILE STATUS.... </em></strong></td>
      	      </tr>
        	    <tr>
        	      <td>File ID:</td>
        	      <td><select name="file_id" id="file_id">
        	        <option value = "">Select File </option>
        	        <option value = "" disabled="disabled">---------------- </option>
        	        <?php

while ($record = mysql_fetch_array($query))
{
		echo '<option value="' .$record['file_id'] .'">' . $record['file_id'] . '</option>';
	
}


	
 ?>
      	        </select></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	        <input type="submit" name="submit" id="submit" value="Check File Status" /></td>
      	      </tr>
      	    </table>
        	  <p>&nbsp;</p>
    </form>
        	<p>&nbsp;</p>
       	  <p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
	  </div>
   </div>
</body>
</html>
