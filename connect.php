<?php
$hostname='localhost'; //default localhost
$username='root';  //default is root.
$password='';       //no password is set .
$database='ecommerce1';  //database name 
$con=mysqli_connect($hostname,$username,$password);
if(! $con)
{
        die('Connection Failed'.mysql_error());
		echo "No Good!!!";
}else{
	
mysql_select_db($database, $con);	
}
?>
