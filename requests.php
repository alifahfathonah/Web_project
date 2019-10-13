<?php
include('session.php');

$result = mysqli_query($db,"SELECT * FROM applied_users order by title");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Job Requests</title>
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
				<th>NIC</th>
				<th>Firstname</th>
				<th>Job Title</th>
			</tr>
			<?php
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $row['nic'] . "</td>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['title'] . "</td>";
				echo "</tr>";
			}
			?>
		</table>
	</header>
</body>
</html>
