<?php
  error_reporting(0);    
include "connect.php"; 

	session_start();

$query =mysql_query("SELECT * FROM file_transaction");
$query2 =mysql_query("SELECT * FROM department");

$department_name_from= $_SESSION['dep_name'];

$user_id= $_SESSION['user_id'];

$selectfilequery2=mysql_query("Select * FROM file");

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
		    <li class="menuitem"><a href="index.html"></a><a href="log_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
		    <li class="menuitem"><a href="index.html"></a><a href="#"></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
		<div id="content">
        	<h2>&nbsp;</h2>
<p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="dispatch_process.php">
  <p> <b><i><u>
    <center>
      <strong>DISPATCH FILE.... </strong>
    </center>
  </i></u><b></p>
  <table width="200" border="0" align="center">
    <tr>
      <td><label for="file_id">File ID</label></td>
      <td><select name="file_id" id="file_id">
        <option value = "">Select File </option>
        <option value = "" disabled="disabled">---------------- </option>
        <?php

while ($record = mysql_fetch_array($query))
{
	if($record['send_dep_name_to'] == $department_name_from  )
	echo '<option value="' .$record['file_id'] .'">' . $record['file_id'] . '</option>';
	
}

while ($record2 =  mysql_fetch_array($selectfilequery2) )
{
	if($record2['dispatch_stat'] == 0 && $record2['department'] == $department_name_from)
	echo '<option value="' .$record2['file_id'] .'">' . $record2['file_id'] . '</option>';
	else 
	continue;
}

	
 ?>
      </select></td>
    </tr>
    <tr>
      <td><label for="dep_name3">Department</label></td>
      <td><select name="dep_name" id="dep_name2">
        <option value = "">Select Department </option>
        <option value = "" disabled="disabled">----------------------------- </option>
        <?php

while ($record = mysql_fetch_array($query2))
{
	if($record['dep_name']!=$department_name_from)
	echo '<option value="' .$record['dep_name'] .'">' . $record['dep_name'] . '</option>';
	else
	continue;
} ?>
      </select></td>
    </tr>
    <tr>
      <td>Remarks:</td>
      <td><textarea name="remarks" id="remarks" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sub" id="sub" value="Dispatch File" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  </center>
  </b>
  </p>
  <label for="fid"></label>
  <p>&nbsp;</p>
  <p>
    <label for="rem"></label>
    <input type="hidden" name="log_id" value="<?php echo $user_id ?>" />
    <input type="hidden" name="dep_name_from" value="<?php echo $department_name_from?>" />
  </p>
</form>
  </div>
</div>
</body>
</html>
