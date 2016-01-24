<!--this file needs work the 'problem uploading error' shows up automatically-->
<!--tthis page is only available after a user has logged in and enables them to upload content-->

<?php
include_once 'dbconfig.php';
include('header1.html');
?>
<!DOCTYPE html>
<html >
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
		<body>
			<h1 style="font-size:300%;color:black;font-family:veranda">Thanks!</h1>
				<p style="font-size:100%;color:red;font-family:arial">Below you will be able to upload your ideas and tips.  
																									Please remember to be respectful and courteous.  
																									This site is monitored and any violation of this policy 
																									will result in your account being deleted.</p>
					<br></br>
					<div id="body">
						<form action="upload.php" method="post" enctype="multipart/form-data">
							<input type="file" name="file" />
								<br></br>
								<button type="submit" name="btn-upload">upload</button>
						</form>
								<br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else 
	{
		(isset($_GET['fail']))
		?>
        <label>Problem While File Uploading !</label>
       
        
        <?php
	}
	?>
</div>

</body>
</html>