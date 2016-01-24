<!--shows the admin a list of users when logged in-->
<html>  
	<head lang="en">  
		<meta charset="UTF-8">  
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">  
		<link rel="stylesheet" type="text/css" href="style/style.css" /> 
		<title>View Users</title>  
	</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
	}  
  </style>  
	<body>  
		<div class="table-scrol">  
			<h1 align="center">All the Users</h1>  
				<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
					<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
						<thead>  
							<tr>  
								<th>User Id</th>  
								<th>User Name</th>  
								<th>User Password</th>  
								<th>User Email</th>  
								<th>Delete User</th>  
							</tr>  
						</thead>  
  <?php  
        include("config.php");  
        $view_users_query="select * from users";//select query for viewing users.  
		$run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
			while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
			{  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3];  
  ?>  
				<tr>  
						<td><?php echo $user_id;  ?></td>  
						<td><?php echo $user_name;  ?></td>  
						<td><?php echo $user_email;  ?></td>  
						<td><?php echo $user_pass;  ?></td>  
						<td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>  
				</tr>  
  <?php } ?>  
  
				</table>  
			</div>  
		</div>  
	</body>  
  
</html>  