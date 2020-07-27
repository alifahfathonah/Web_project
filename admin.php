<?php
include('session.php');
?>
<html>
<head>
	<title>Admin</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div>
		<div class="logo">
			<img src="logo.png">

			<ul class="nav">
				<li class="active"><a href="admin.php">Home</a></li>
				<li><a href="add.php">Add User</a></li>
				<li><a href="delete.php">Delete User</a></li>
				<li><a href="update.php">Edit User</a></li>
				<li><a href="view.php">View all users</a></li>
				<li><a href="requests.php">Job Requests</a></li>
				<li><a href="logout.php">Log Out</a></li>				
			</ul>
		</div>
	</div>
	<div class="Headline">
		<header>
			<h1>Welcome, <?php echo $login_session; ?></h1> 
		</header>
	</div>
</body>
</html>