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
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="200" border="1">
  <tr>
    <td><strong>CHECKING FILE STATUS....</strong></td>
  </tr>
</table>
<p>&nbsp;</p>
            <?php

include 'connect.php';

$file_id = $_POST['file_id'];


$query = mysql_query("SELECT * FROM file_transaction WHERE file_id = '$file_id'");

if($file_id == "")
{
	echo 'Please Select The file';
	 $time = 3; //Time (in seconds) to wait.
	 $url = "log_temp_welcome.php"; //Location to send to.		
	 header("Refresh: $time; url=$url"); 
}
else
{
echo "<table border='1' align='center'>
<tr>
<th>User ID</th>
<th>File ID</th>
<th>Sender Department</th>
<th>Receiver Department</th>
<th>Remark</th>
<th>Dispatch Status</th>
<th>Receive Status</th>
<th>Current Location of File</th>
<th>FILE STATUS</th>
<th>Date & Time</th>
</tr>";


while($row = mysql_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $row['login_id'] . "</td>";
echo "<td>" . $row['file_id'] . "</td>";
echo "<td>" . $row['send_dep_name_from'] . "</td>";
echo "<td>" .$row['send_dep_name_to'] . "</td>";
echo "<td>" .$row['remark'] . "</td>";
echo "<td>" .$row['dispatch_status'] . "</td>";
echo "<td>" .$row['received'] . "</td>";
echo "<td>" .$row['current_location'] . "</td>";
echo "<td>" .$row['file_status'] . "</td>";
echo "<td>" .$row['date_time'] . "</td>";
} 

}
?>
         
  </div>
          <p>&nbsp;</p>
     <p>&nbsp;</p>
      <p>&nbsp;</p>
   </div>

</body>
</html>



