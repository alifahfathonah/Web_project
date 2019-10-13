<?php
include('session.php');
?>
<html>
<head>
	<title>Login Page</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/contact.css" rel="stylesheet" type="text/css">
</head>

<div class="logo">
	<img src="images/3.png">
	<ul class="nav">
		<li class="active"><a href="welcome.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="help.php">Help</a></li>
		<li><a href = "logout.php">Sign Out</a></li>
		<li class="loginName"><?php echo $login_session; ?></li>
	</ul>
</div>
</head>
<body>
	<div class="container">
		<center>
		<h><b><Font size="7" family="Comic Sans MS" color="#80112d">CONTACT US</Font></h><br>
		
		<br><br>
		<p><Font size="4" familyfamily="arial" color="#0e2f44">E-mail: </Font><Font size="4" type="arial" color="#34a99a"> IntelliWare@gmail.com</font><br/>
		<Font size="4" family="arial" color="#0e2f44">Phone: </Font><Font size="4" type="arial" color="#34a99a">0119875476</font><br/>
		<Font size="4" family="arial" color="#0e2f44">Address: </Font><Font size="4" type="arial" color="#34a99a">IntelliWare,<br/>N0:43/11/A,<br/>
		Thimbirigasyaya,<br/>Colombo-07.</font><br/>
		<Font size="4" family="arial" color="#0e2f44">Buisness Hours: </Font><Font size="4" type="arial" color="#34a99a">Monday - Friday: 09:00 - 17:30</font><br/>
		<br><br>
		</center>
	</div>

</body>
</html>
