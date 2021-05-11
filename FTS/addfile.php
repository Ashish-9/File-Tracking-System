<?php

  error_reporting(0);    
include "connect.php"; 
$query2 =mysql_query("SELECT * FROM department");


session_start();

	   	$depart_name=$_SESSION['dep_name'];
		   
 if(isset($_POST['fileid'], $_POST['fname'],$_POST['dep_name']))
{
$errors = array();

$fileid=$_POST['fileid'];
$fname=$_POST['fname'];	
$dep_name=$_POST['dep_name'];	
$badchars = '!@£$%^&*()+=-][\;/.,`~<>?:"|{} \'';
	
	if (empty($fileid) && empty($fname) && empty($dep_name))
	{
		$errors[]= 'ALL fields Required';
		
		}
		
		
  		else if($fileid == "" ) 
			{
	            $errors[]= 'Please Enter File ID';
			}
			
			else if (strpbrk($fileid, $badchars) !== false)
			{
	            $errors[]= 'INVALID File ID...';
			}
			
		else  if(strlen($fileid)>30 && $fileid!= "")
			{
	            $errors[]= ' Entered ID is TOO Long';				
			}
		
		else if($fname == "" ) 
			{
	            $errors[]= 'Please Enter The File Name';
			}
			
			else if (strpbrk($fname, $badchars) !== false)
			{
	            $errors[]= 'INVALID File Name...';
			}
			
		else  if(strlen($fname)>50 && $fname != "")
			{
	            $errors[]= ' Entered Name is TOO Long';				
			}
			
		else if(!ctype_alpha(str_replace(' ','',$fname))) 
			{
	            $errors[]= 'File Name should be Character Only';
			}

		else if($dep_name == "" ) 
			{
	            $errors[]= 'Please Select The Department';
			}
			
			else if (empty($error))
		
		{
			echo 'enters';
			include 'connect.php';
$query = "INSERT INTO file VALUES 	('$fileid','$fname','$dep_name','0',NOW())";
			
			mysql_query($query) or die('Error, query failed');
			
			
			$time = 1; //Time (in seconds) to wait.
		 $url = "addfileprocess.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
			}

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
		    <li class="menuitem"><a href="index.html"></a><a href="log_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
		    <li class="menuitem"><a href="index.html"></a><a href="#"></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
		<div id="content">
       	  <h2>&nbsp;</h2>
<p>&nbsp;</p>
<p> <?php if (!empty($errors))
{
foreach ($errors as $error)

echo '<strong><font color="red"> * '.$error.'</font></strong><br/><br/>';
}

?></p>
<p>&nbsp;</p>
       	  <form id="form1" name="form1" method="post" action="addfile.php">
       	    <table width="200" border="0" align="center">
       	      <tr>
       	        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>ADDING NEW FILE...</em></strong></td>
   	          </tr>
       	      <tr>
       	        <td><label for="fileid">File ID :</label></td>
       	        <td><input type="text" name="fileid" id="fileid" /></td>
   	          </tr>
       	      <tr>
       	        <td>File Name</td>
       	        <td><input type="text" name="fname" id="fname" /></td>
   	          </tr>
       	      <tr>
       	        <td>Department</td>
       	        <td><select name="dep_name" id="dep_name2">
       	          <option value = "">Select Department </option>
       	          <option value = "" disabled="disabled">----------------------------- </option>
       	          <?php

while ($record = mysql_fetch_array($query2))
{
	if($record['dep_name'] == $depart_name)
	echo '<option value="' .$record['dep_name'] .'">' . $record['dep_name'] . '</option>';
	else
	continue;
} ?>
     	          </select></td>
   	          </tr>
       	      <tr>
       	        <td colspan="2">&nbsp;</td>
   	          </tr>
       	      <tr>
       	        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       	          <input type="submit" name="submit" id="submit" value="ADD FILE" /></td>
   	          </tr>
   	        </table>
       	    <p>&nbsp;</p>
   	      </form>
       	  <p>&nbsp;</p>
  </div>
</div>
</body>
</html>
