<?php
include('session.php');
?>
<html>
<head>
	<title>Career Line</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/help.css" rel="stylesheet" type="text/css">
	<style>
</style>
</head>
<body>
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
	<br>
	<div>
		<p>How it Works!</p>
		<div class="container">
			<table>
				<tr class="trTitle"><td>1)Create an account</td></tr>
				<tr><td>Create an account using your NIC number in order to apply for jobs. This makes it easier to get your information when recruiting.</td></tr>
				<tr class="trTitle"><td>2)Log in</td></tr>
				<tr><td>Sign in using the account you created.</td></tr>
				<tr class="trTitle"><td>3)Find the job you're looking for</td></tr>
				<tr><td>This site contains all the job vacancies in the company.Match your qualifications with the required and find the job that suites you.</td></tr>
				<trc class="trTitle"><td>4)Apply for the job</td></tr>
					<tr><td>Apply for the suitable job. The company will get back to you within 1 week.</td></tr>
					<tr><td><h3 align="center"> We are looking forward to work with you!</h3></td></tr>
				</table>
			</div>
		</div>
	</body>
</body>
</html>