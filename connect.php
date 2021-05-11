 <?php
$server = "localhost"; // aka "localhost" or "69.249.73.42"
$username = "root"; // aka "ChuckNorris"
$password = ""; // aka "cankickyourass"
$database = "fts"; // where you want your new table to go

mysql_connect("$server", "$username", "$password") or die(mysql_error());
mysql_select_db("$database") or die(mysql_error());
?> 