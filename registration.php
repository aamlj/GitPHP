<?php     
//include connect.php page for database connection
include('connect.php');
require('config.inc.php');
require('form_functions.php');

#var_dump( $_REQUEST);#
$reg_errors = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if (preg_match('/^[A-Z \'.-]{2,45}$/i',$_POST['name'])){
		$sql="insert into users_info(Name) values('".$_POST['name']."', '";
	}else{
		echo 'Please enter your  name!';
	}
	if (preg_match('/^[A-Z \'.-]{2,45}$/i',$_POST['email'])){
		$sql="insert into users_info(email) values('".$_POST['email']."', '";
	}else{
		echo 'Please enter your email!';
	}
}else{
	echo "no good!";
	
}
//}

/*$sql="insert into users_info(Name,Email,Password) values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."' )";
$res=mysql_query($sql);
if($res)
{
echo "record submitted successfully";
}
else
{
echo "There is some problem in inserting record";
}
	//echo"good job!!";
/*	if (preg_match('/^[A-Z \'.-]{2,45}$/i',$_POST['Name'])){
		$fn = escape_data($POST['Name'], $dbc);
	}else{
		$reg_errors['Name'] = 'Please enter your  name!';
	}
	/*if (preg_match('/^[A-Z \'.-]{2,45}$/i',$_POST['Password'])){
		$ln = escape_data($POST['Password'], $dbc);
	}else{
		$reg_errors['Password'] = 'Please enter your last name!';
}

/*if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']=='')
{
echo "Please Enter Your Information Below!";
}
else
{*/



?>
