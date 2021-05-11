<?php 
session_start();

if( !isset($_SESSION['admin_username']) )
 {   
   			$time = 3; //Time (in seconds) to wait.
		 $url = "login_page.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
 die( "<br><br><b><center><blink>Login required....</blink></b></center>" );

 }


	if(isset($_POST['dep_id'], $_POST['dep_name']))
{
$errors = array();

$dep_id=$_POST['dep_id'];
$dep_name=$_POST['dep_name'];	
$badchars = '!@£$%^&*()+=-][\;/.,`~<>?:"|{} \'';
 		


	if (empty($dep_id) && empty($dep_name) )
	{
		$errors[]= 'ALL fields Required';
		
		}
		
		
  		else if($dep_id == "" ) 
			{
	            $errors[]= 'Please Enter Department ID';
			}
			//rtrim($string, '/');
  		else if (strpbrk($dep_id, $badchars) !== false)
			{
	            $errors[]= 'INVALID Characters...';
			}
			
		else  if(strlen($dep_id)>30 && $dep_id != "")
			{
	            $errors[]= ' Entered ID is TOO Long';				
			}
		
		else if($dep_name == "" ) 
			{
	            $errors[]= 'Please Enter Department Name';
			}
			
		else  if(strlen($dep_name)>50 && $dep_name != "")
			{
	            $errors[]= ' Entered Name is TOO Long';				
			}
			
		else if(!ctype_alpha(str_replace(' ','',$dep_name))) 
			{
	            $errors[]= 'Department Name should be Character Only';
			}

			
			else if (empty($error))
		
		{
			echo 'enters';
			include 'connect.php';
$query2 = "INSERT INTO department VALUES 	('$dep_id','$dep_name',NOW())";
			
			mysql_query($query2) or die('Error, query failed');
			
			
			$time = 1; //Time (in seconds) to wait.
		 $url = "add_department_process.php"; //Location to send to.		
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
		    <li class="menuitem"><a href=""></a></li>
		    <li class="menuitem"><a href=""></a><a href="admin_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
		    <li class="menuitem"><a href=""></a><a href="#"></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
  <div id="content">
        	<h2>&nbsp;</h2>
        	<p>&nbsp;</p>
   	<form id="form1" name="form1" method="post" action="add_department.php">
   	  <p>&nbsp;</p>
   	      <p>   <?php if (!empty($errors))
{
foreach ($errors as $error)

echo '<strong><font color="red"> * '.$error.'</font></strong><br/><br/>';
}

?>
     <p>   <style type="text/css" >
.error{border:1px solid red; }
.message{color: red; font-weight:bold; }
</style>
    </p>
         
   	  <p>&nbsp;</p>
        	  <table width="318" height="182" border="0" align="center">
        	    <tr>
        	      <td colspan="2 "><strong>ADDING NEW DEPARTMENT.....</strong></td>
      	      </tr>
        	    <tr>
        	      <td>Enter Department ID:</td>
        	      <td><input type="text" name="dep_id" id="dep_id" /></td>
      	      </tr>
        	    <tr>
        	      <td><label for="dep_name">Enter Department Name</label></td>
        	      <td><input type="text" name="dep_name" id="dep_name" /></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	        <input type="submit" name="submit" id="submit" value="Add Department" /></td>
      	      </tr>
      </table>
        	  <p>&nbsp;</p>
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
