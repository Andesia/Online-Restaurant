<?php
session_start();
require('connect.php');
 

if (isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = False;
    session_destroy();
    session_unset();
   header("Location: login.php"); 
    exit();
}
    ?>