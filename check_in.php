<?php 
  error_reporting(0);    
include 'connect.php';

$query =mysql_query("SELECT * FROM file_transaction");
$selectfilequery=mysql_query("Select * FROM file_transaction ORDER BY date_time DESC");


session_start();
$department_name_from= $_SESSION['dep_name'];
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
       	  <p><center>
       	    <h2>CHECK IN:</h2></b></i></u>
            </strong>
       	  </center></p>
       	  <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="check_in_process.php">
            <table width="270" height="283" border="0" align="center">
                <tr>
                  <td width="106"><label for="check_in">Select the file: </label></td>
                  <td colspan="2"><select name="check_in" id="check_in">
                    <option value = "">Select File </option>
                    <option value = "" disabled="disabled">---------------- </option>
                    <?php
	
while ($record = mysql_fetch_array($selectfilequery))
{
	
	if($record['send_dep_name_to'] == $department_name_from  )
	
	echo '<option value="' .$record['file_id'] .'">' . $record['file_id'] . '</option>';
	
	else
	continue;

}



 ?>
                  </select></td>
                </tr>
                <tr>
                  <td height="63"><input type="submit" name="accept" id="accept" value="Accept File" /></td>
                </tr>
                <tr>
                  <td height="59"><input type="submit" name="reject" id="reject" value="Reject File" /></td>
                  <td>&nbsp;&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="53"><input type="submit" name="sanction" id="sanction" value="Sanction File" /></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="72"><input type="submit" name="dispatch_file" id="dispatch_file" value="Dispatch File" /></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
            </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <input type="hidden" name="dep_name_from" value="<?php echo $department_name_from ?>" />
              <p>&nbsp;</p>
          </form>
          <p>&nbsp;</p>
  </div>
</div>
</body>
</html>
