<!--there is a problem with this because it list ALL files and not just those of the user.-->
<!--a file that lists all the files uploaded when clicked on after uploading content-->
<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>File Uploading With PHP and MySql</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
		<body>

		<div id="body">
			<table width="80%" border="1">
				<tr>
					<th colspan="4"style="font-size: 2em">Uploads...</th>
				</tr>
				<tr>
					<td>File Name</td>
					<td>File Type</td>
					<td>File Size(KB)</td>
					<td>View</td>
			</tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>