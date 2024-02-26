<?php
include('../functions/redirect.php');
if (isset($_SESSION['auth']))
 {
    if ($_SESSION['role'] != 1)
     {
        redirect("index.php", "You are not authorized to view this page");
       
    }
}
 else

  {
    redirect("Login.php", "Log in to continue");
   
}
?>