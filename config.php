<?php
    // These variables define the connection information for  MySQL database 
    $username = "root"; 
    $password = ""; 
    $host = "localhost"; 
    $dbname = "users_final"; 
     require('mysql.inc.php'); 
    $dbcon=mysqli_connect("localhost","root","");  
     mysqli_select_db($dbcon,"users");  
	
    if(!isset($_SESSION)) 
{ 
//session_start(); 
}  