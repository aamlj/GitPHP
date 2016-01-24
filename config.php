<?php

if(!defined('LIVE'))DEFINE('LIVE', false);
DEFINE('CONTACT_EMAIL', 'mljones699@mail.cfcc.edu');

DEFINE('BASE_URI', 'C:\xampp\htdocs\PHPincludes\\');
DEFINE('BASE_URL', 'localhost/xampp/html/');
DEFINE('PDFS_DIR', BASE_URI . 'pdfs/');
DEFINE('MYSQL', BASE_URI . 'C:\xampp\htdocs\PHPincludes\mysql\'');


session_start();

function mt_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars){
	//error message
	$message = "An error occurred in script '$e_file' on line $e_line:\n $e_message\n";
	//add the backtrace
	$message .="<pre>" .print_r(debug_backtrace(), 1) . "</pre>\n";
	//show error in browser
	if (!LIVE) {
		ECHO '<div class = "alert alert-danger">' . n12br($message) . '</div>';
	}else{//print error
		error_log ($message, 1, CONTACT_EMAIL, 'From:mljones699@mail.cfcc.edu');
		//only print if error is not a notice
		if ($e_number != E_NOTICE){
			echo '<div class = "alert alert-danger">A system error occurred.  We apologize for the inconvience.</div>';
		}
	
		} //end of if-else
	return true;
}