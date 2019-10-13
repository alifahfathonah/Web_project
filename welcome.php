<?php
include('session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = "";
	if (isset($_POST['btnSE'])) {
		$title = "Software Engineer";
	} else if (isset($_POST['btnDD'])){
		$title = "Database Developer";
	}
	else if (isset($_POST['btnSAdmin'])){
		$title = "System Administrator";
	}
	else if (isset($_POST['btnIT'])){
		$title = "IT Technician";
	}
	else if (isset($_POST['btnPM'])){
		$title = "Project Manager";
	}
	else if (isset($_POST['btnSAnalyst'])){
		$title = "System Analyst";
	}
	else if (isset($_POST['btnNArchi'])){
		$title = "Network Architecture";
	}
	else if (isset($_POST['btnNAdmin'])){
		$title = "Network Administrator";
	}

	$sql = "INSERT INTO applied_users(nic, username, title) VALUES('$nic', '$login_session', '$title')";
	if($db->query($sql) == TRUE){
		echo "<script type='text/javascript'>alert('Your job request successfully submitted!!');
		window.location='welcome.php';
		</script>";
	}else{
		$error =  "Error: " .$sql . "<br>".$db->error;
	}

}



?>


<html>
<head>
	<title>Welcome User</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/welcome.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="logo">
		<img src="logo.png">
		<ul class="nav">
			<li class="active"><a href="">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="help.php">Help</a></li>
			<li><a href = "logout.php">Sign Out</a></li>
			<li class="loginName"><?php echo $login_session; ?></li>
		</ul>
	</div>

<div ><label class="errorMsg"><?php if(!empty($error)){echo $error;} ?></label></div>
	<div class="container">
		<!-- Error message -->

		<form action="" name="applyForm" onSubmit="" method="post">
			<table>
				<tr>
					<th>Job Title</th>
					<th>Job Description</th>
					<th></th>
				</tr>
				<tr>
					<td>Software Engineer</td>
					<td>
						<ul>
						<li>Ensures that code artifacts produced are of the highest quality, conforming to set or agreed upon standards.</li>
						<li>Accepts project delivery responsibilities and demonstrate accountability to leadership.</li>
						<li> Maintains a sense of individuality in thinking and decision making.</li>
						<li> Typical graduate software engineer salaries start from Rs.120,000 a year.</li>
					
					</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnSE" value="Apply"></td>
				</tr>
				<tr>
					<td>Database administrator</td>
					<td>
						<ul>
						<li>As a database administrator, you'll be responsible for the performance, integrity and security of a database. However, depending on the organisation and your level of responsibility, the role can vary from inputting information through to total management of data.</li>
						<li>Designing and developing database architecture, data structures, tables, dictionaries and naming conventions for information systems projects</li>
						<li> Typical graduate Database administrator salaries start from Rs.60,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnDD" value="Apply"></td>
				</tr>
				<tr>
					<td>System Administrator</td>
					<td>
						<ul>
						<li>A system administrator’s job is unglamorous but essential to keeping IT operations running smoothly. The system administrator is there to keep the company’s network safe and running efficiently.</li>
						<li>The role may include some mundane tasks, but each one is essential for the continued running of IT operations, to prevent problems and to improve systems’ performance.</li>
						<li> Typical graduate System Administrator salaries start from Rs.80,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnSAdmin" value="Apply"></td>
				</tr>
				<tr>
					<td>IT Technician</td>
					<td>
						<ul>
						<li>Information technology (IT) technicians maintain computer systems, provide technical support and teach their clients the basic skills they need to operate newly installed programs.</li>
						<li> Aspiring technicians can find certificate and degree programs in information technology and acquire industry-recognized certifications.</li>
						<li> Typical graduate IT Technician salaries start from Rs.50,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnIT" value="Apply"></td>
				</tr>
				<tr>
					<td>Project Manager</td>
					<td>
						<ul>
						<li> As the project manager, your job is to plan, budget, oversee and document all aspects of the specific project you are working on.</li>
						<li> Project managers may work closely with upper management to make sure that the scope and direction of each project is on schedule.</li>
						<li> Typical graduate Project Manager salaries start from Rs.75,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnPM" value="Apply"></td>
				</tr>
				<tr>
					<td>System Analyst</td>
					<td>
						<ul>
						<li> Systems analysts analyse how well software, hardware and the wider IT system fit the business needs of their employer or of a client.</li>
						<li> They write requirements for new systems and may also help implement them and monitor their effectiveness.</li>
						<li> Typical graduate System Analyst salaries start from Rs.75,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnSAnalyst" value="Apply"></td>
				</tr>
				<tr>
					<td>Network Architecture</td>
					<td>
						<ul>
						<li> Network Architects must complete various tasks in order to install, upgrade and maintain corporate network systems.</li>
						<li> We have analyzed several Network Architect job listings and found the following duties and responsibilities among the most commonly indicated for this occupation.</li>
						<li> Typical graduate Network Architecture salaries start from Rs.85,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnNArchi" value="Apply"></td>
				</tr>
				<tr>
					<td>Network Administrator</td>
					<td>
						<ul>
						<li> We are looking for a Network Administrator to maintain a reliable, secure and efficient data communications network</li>
						<li> The ideal candidate will be able to deploy, configure, maintain and monitor all active network equipment in order to ensure smooth network operation.</li>
						<li> Typical graduate Network Administrator salaries start from Rs.90,000 a year.</li>
						</ul>
					</td>
					<td class="applyColumn"><input type="submit" name="btnNAdmin" value="Apply"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>