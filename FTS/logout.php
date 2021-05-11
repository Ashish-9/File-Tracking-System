<?php

  error_reporting(0);    


    $_SESSION['user_id'] = NULL;
    $_SESSION['password'] = NULL;
    $_SESSION['dep_name'] = NULL;
    unset($_SESSION['user_id']);  
    unset($_SESSION['password']);
    unset($_SESSION['dep_name']);
session_unset();
session_destroy();
header('location:thankyou.php?mess=1');

?>




