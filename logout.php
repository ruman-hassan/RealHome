<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Returning to login...';
   header('Refresh: 3; URL = loginsession.php');
?>