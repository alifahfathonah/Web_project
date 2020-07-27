
<?php
include("config.php");
session_start();



if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $lname = mysqli_real_escape_string($db,$_POST['lname']);
  $nic = mysqli_real_escape_string($db,$_POST['nic']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $uname = mysqli_real_escape_string($db,$_POST['uname']);
  $pwd = mysqli_real_escape_string($db,$_POST['password']); 


  $sql = "UPDATE user SET ";
  if($fname != NULL){
    $sql = $sql . "firstname='$fname',";
  }
  if($lname != NULL){
    $sql = $sql . "lastname= '$lname',";
  }
  if($email != NULL){
    $sql = $sql . "email='$email',";
  }
  if($lname != NULL){
    $sql = $sql . "username='$uname',";
  }
  if($lname != NULL){
    $sql = $sql . "password='$pwd',";
  }


  $sql=rtrim($sql,", ");
  $sql = $sql . " WHERE nic='$nic'";

  if($db->query($sql) == TRUE){
    echo "<script type='text/javascript'>alert('User updated successfully!');
    window.location='update.php';
    </script>";
  }else{
   $error =  "Error: " .$sql . "<br>".$db->error;
 }
}
?>
<html>
<head>
  <title>Update User</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/update.css" rel="stylesheet" type="text/css">


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


</header>




<div class="container">
  <!-- Error message -->
  <div ><label class="errorMsg"><?php if(!empty($error)){echo $error;} ?></label></div>


  <form action="" name="updateForm" method="post">
    <label ><font align="center" >Update Form</font></label><br/><br/>

    <label for="nic" class="red"><b>Enter NIC of the user you want to update</b></label>
    <input type="text" id="nic" name="nic" placeholder="NIC.." maxlength="10" required>

    <hr>
    <br>


    <label for="fname"> First Name</label>
    <input type="text" id="fname" name="fname" placeholder="First name.." maxlength="20">

    <label for="lname"> Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Last name.." maxlength="20">

    <label for="email">Email Address</label>
    <input type="text" id="email" name="email" placeholder="email address.." maxlength="30">

    <label for="uname"> User Name</label>
    <input type="text" id="uname" name="uname" placeholder="User name.." maxlength="25">

    <label for="password"> Password</label>
    <input type="password" id="password" name="password" placeholder="First name.." maxlength="25">
    <br>
    <br>
    <input type="submit" value="Submit">

    <input type="reset" value="Reset">
  </form>
</div>

</div>
</body>
</html>