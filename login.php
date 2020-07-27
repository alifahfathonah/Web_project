<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
               // username and password sent from form 

 $uname = mysqli_real_escape_string($db,$_POST['uname']);
 $pwd = mysqli_real_escape_string($db,$_POST['psw']); 

 $sql = "SELECT id,admin FROM user WHERE username = '$uname' and password = '$pwd'";
 $result = mysqli_query($db,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $admin = $row['admin'];
 $count = mysqli_num_rows($result);


// If result matched $uname and $pwd, table row must be 1 row
 if($count == 1) {
  $_SESSION['login_user'] = $uname;
  $_SESSION['admin'] = $admin;
  if($admin ==1){ 
    header("location: admin.php");
  } else{
    header("location: welcome.php");
  }  
}else {
  $error = "Your Username or Password is invalid";
}
}
?>
<html>
<head>
  <title>Login</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/login.css" rel="stylesheet" type="text/css">
  <style>
</style>
</head>
<body>

  <div>
    <div class="logo">
     <img src="images/3.png">
   </div>

 </div>

 <form action="" name="LoginForm" onSubmit="return checkForm()" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>
</form>
<!-- Error message -->
<div ><span class="errorMsg"><?php if(!empty($error)){echo $error;} ?></span></div>
</div>
</body>
</html>