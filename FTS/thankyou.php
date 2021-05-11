<?php

$mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
if($mess == 1) {
  echo '<br><br><center><b>SUCCESSFULLY LOGOUT...!!</b></center>'; 
  echo '<br><br><center><blink><b>Please Wait...While we Redirect You</b></blink></center>';
  			$time = 4; //Time (in seconds) to wait.
		 $url = "login_page.php"; //Location to send to.		
		 header("Refresh: $time; url=$url"); 
  }
  
  ?>