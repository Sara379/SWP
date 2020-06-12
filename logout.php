<?php

 session_start();
 session_unset();
 session_destroy(); //destroy the session
 header("location:Clinic.php"); //to redirect back to the welcome page after logging out

?>

