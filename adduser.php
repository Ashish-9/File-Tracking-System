<?php
  error_reporting(0);    
	session_start();
if($_SESSION['admin_username']==""){


	   
   			$time = 3; //Time (in seconds) to wait.
		 $url = "login_page.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
 die( "<br><br><b><center><blink>Please Enter User Name & password....</blink></b></center>" );

 
	 }
	 else
	 {


include "connect.php"; 



$query =mysql_query("SELECT * FROM department");
	 }
	 
 
	if(isset($_POST['user_name'], $_POST['user_id'],$_POST['pass'],$_POST['dep_name']))
{	 

$errors = array();

$username=$_POST['user_name'];
$userid=$_POST['user_id'];
$pass=$_POST['pass'];
$dep_name=$_POST['dep_name'];
$badchars = '!@£$%^&*()+=-][\;/.,`~<>?:"|{} \'';


		if (empty($username) && empty($userid) && empty($pass) && empty($dep_name))
			{

				$errors[]= 'ALL fields Required';
			}

  		else if($username == "" ) 
			{
	            $errors[]= 'Please Enter Name';
			}
		
		else if(strlen($username)>50  ) 
			{
	            $errors[]= 'Entered Name Is TOO Long';
			}
			
		
			else if(!ctype_alpha(str_replace(' ','',$username))) 
			{
	            $errors[]= 'Name Must be Character Only';
			}
			
		else  if($userid == "")
			{
	            $errors[]= 'Please Enter User ID';
			}
			
			else if (strpbrk($userid, $badchars) !== false)
			{
	            $errors[]= 'INVALID User ID...';
			}
			
		 else if($pass == "")
			{
	            $errors[]= 'Please Enter Password';				
			}
			
		else  if(strlen($pass)<5 && $pass != "")
			{
	            $errors[]= 'Password Must Be Greater Than 5 Characters';				
			}
				
			
		else  if($dep_name == "")
			{
	            $errors[]= 'Please Select The Department';				
			}
		
		else  if(strlen($userid)<5 && $username != "")
			{
	            $errors[]= 'User ID Must be Greater than 5 Characters';				
			}
				
				
			else  if(is_numeric ($userid))
			{
	            $errors[]= 'User ID Must Conatin Both LETTER AND CHARACTER';				
			}	
	
				else  if(strlen($userid)>20 && $username != "")
			{
	            $errors[]= 'User ID Must be Less Than 20 Characters';				
			}
		
		else if (empty($error))
		
		{
			
			$query2 = "INSERT INTO user VALUES 	('$userid','$username','$pass','$dep_name',NOW())";
			
			mysql_query($query2) or die('Error, query failed');
			
			
						
		 $time = 1; //Time (in seconds) to wait.
		 $url = "adduser_process.php"; //Location to send to.		
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
      <li class="menuitem"><a href="index.html"></a><a href="admin_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
      <li class="menuitem"></li>
    </ul>
    <p>&nbsp;</p>
    <ul>
      <li class="menuitem"></li>
    </ul>
  </div>
  <div id="content">
   	<h2>&nbsp;</h2>
        	<p>&nbsp;</p>
       	  <p>&nbsp;</p>
    <form action="adduser.php" method="post" name="form1" id="form1">
              <p>
                <label for="dep_name2"></label>
              </p>
      <p>&nbsp;</p>
      <p>
        <?php 
          error_reporting(0);    	if (!empty($errors))
{
foreach ($errors as $error)

echo '<strong><font color="red"> * '.$error.'</font></strong><br/><br/>';
}

?>
        <style type="text/css" >
.error{border:1px solid red; }
.message{color: red; font-weight:bold; }
</style>
    </p>
              <table width="338" height="191" border="0" align="center">
                <tr>
                  <th colspan="2"><p> <h2>ADDING NEW USER....</h2>
                    </td>
                  </p>
                    <p>&nbsp;</p></th>
                </tr>
                <tr>
                  <td width="161"><label for="user_name3">Enter  Full Name:</label></td>
                  <td width="143"><input type="text" name="user_name" id="user_name" value="<?php if(isset($name)){echo $name;} ?>" /></td>
                </tr>
                <tr>
                  <td>Enter  ID:</td>
                  <td><input type="text" name="user_id" id="user_id" /></td>
                </tr>
                <tr>
                  <td><label for="pass3">Enter Password</label></td>
                  <td><input type="password" name="pass" id="pass" /></td>
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
                  <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="submit" id="submit" value="Add User" /></td>
                </tr>
      </table>
              <p>&nbsp;</p>
    </form>
          <p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
  </div>
</div>
</body>
</html>
