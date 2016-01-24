<!--this file is not complete.  Intended for downloading files according to id from mysql.--!>

<?php  mysql_connect("localhost","root","");  
mysql_select_db("table_uploads");  
$id = "1";
$query = "SELECT file FROM uploads where id=$id";  
$result = MYSQL_QUERY($query);  
//$data = MYSQL_RESULT($result,0,"data");  
//$type = MYSQL_RESULT($result,0,"filetype"); 
 echo $result;  ?>