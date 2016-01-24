<!--this file logs user out and ends the session-->
<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/CSC/welcome.php"); //to redirect back to "welcome.php" after logging out
exit();
?>