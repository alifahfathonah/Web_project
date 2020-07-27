<?php
include('session.php');

$result = mysqli_query($db,"SELECT * FROM user order by id");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/view.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="images/3.png">
			<ul class="nav">
				<li class="active"><a href="admin.php">Home</a></li>
				<li><a href="add.php">Add User</a></li>
				<li><a href="delete.php">Delete User</a></li>
				<li><a href="update.php">Update User</a></li>
				<li><a href="view.php">View all users</a></li>
				<li><a href="requests.php">Job Requests</a></li>
				<li><a href="logout.php">Log Out</a></li>		
			</ul>
		</div>
		<table id="customers">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>nic</th>
				<th>Email</th>
			</tr>
			<?php
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $row['firstname'] . "</td>";
				echo "<td>" . $row['lastname'] . "</td>";
				echo "<td>" . $row['nic'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "</tr>";
			}
			?>
		</table>
	</header>
</body>
</html>
