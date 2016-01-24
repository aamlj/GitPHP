<!--this file contains all the connections for database and tells wheather or not connection successful.-->
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "users";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>