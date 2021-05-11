<?php
  error_reporting(0);    
include 'connect.php';

$login_id = $_POST['loginid'];
$pass = $_POST['password'];
$department = isset($_POST['dept']) ? $_POST['dept'] : "" ;
$query =mysql_query("SELECT * FROM user");

 if($login_id !="" || $pass != "" || $department !="")
 {
$numros = mysql_num_rows($query);

if($numros !=0)
	{

		while($row=mysql_fetch_assoc($query))	
		{	
//			 "entering into while";

			$dbuserid = $row['user_id'];
			$dbusername = $row['user_name'];
     		$dbpassword = $row['password'];
			$dbdepartment=$row['department_name'];
			if($login_id == $dbuserid && $pass == $dbpassword  && $department == $dbdepartment)
			break;

			}
			
	}

		

			if($login_id == $dbuserid && $pass == $dbpassword && $department == $dbdepartment)
{

session_start();
		   $_SESSION['user_id']=$login_id;
	   	   $_SESSION['password']=$pass;
	   	   $_SESSION['dep_name']=$dbdepartment;
		   //header( 'location:http://localhost/filedemo/department/department_welcome.html' ) ;

//echo "<br><br><center><b>User Deleted From the Database</b></center><br><br>click here <a href='adminwelcome.php'>to return Home Page";
}
else
{
echo die("<br>SORRY Entered Username or Password does not exist in Database <br><br><br>Click here<a href='login_page.php'>Try Again</a>");
}
 }
 else
 
echo die("<br>Please Enter The All fields...<br><br><br>Click here<a href='login_page.php'>Try Again</a>");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>HOME</title>
</head>

<body>
<p></center>&nbsp;</p>
<div id="container">
		<div id="mainpic"></div>
		<div id="menu">
		  <ul>
		    <li class="menuitem"><a href="index.html"></a></li>
		    <li class="menuitem"><a href="index.html"></a><a href="log_temp_welcome.php">HOME</a><a href="logout.php">LOGOUT</a><a href="#"></a></li>
		    <li class="menuitem"><a href="index.html"></a></li>
		    <li class="menuitem"></li>
		    <li class="menuitem"></li>
	      </ul>
  </div>
		<div id="content">
        	<h2>&nbsp;</h2>
        	
          <p><?php echo '<center><strong><font color="green">LOGIN FROM--'.$department.' Department..</strong></font><br><br>'.'</center>'.'<center><strong><font color="green"> WELCOME -'.$dbusername.'<center></strong></font>'; ?></p>
          <p>&nbsp;</p>
          <p>&nbsp; </p>
          <table width="600" border="1" align="center">
              <tr>
                <td><strong>SELECT THE OPERATION</strong></td>
            </tr>
              <tr>
                <td><a href="file_process_id.php"></a></td>
              </tr>
            <tr>
                <td><a href="addfile.php?dep_name=<?php echo $department?>&amp; log_id=<?php echo $login_id ?>">ADD FILE</a></td>
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
          <p>&nbsp;</p>
        	<p>&nbsp;</p>
<p>&nbsp;</p>
  </div>
</div>
</body>
</html>
