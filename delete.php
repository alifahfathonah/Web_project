
<?php
include('session.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $nic = mysqli_real_escape_string($db,$_POST['nic']);
  $sql = "DELETE FROM user WHERE nic = '$nic'";
  if($db->query($sql) === TRUE){
   echo "<script type='text/javascript'>alert('User deleted successfully!');
   window.location='delete.php';
   </script>";
 }else{
   $error = "No users found with the NIC number " .$nic ;
 }
}
?>
<html>
<head>
  <title>Delete User</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/delete.css" rel="stylesheet" type="text/css">
  <style>


</style>
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
 <div ><label class="errorMsg"><?php if(!empty($error)){echo $error;} ?></label></div>
 <div class="container">
  <form action="" name="DeleteUserForm" method="post">
    <label ><font align="center" >Delete User</font></label><br/><br/>
    <label for="nic"> NIC</label>
    <input type="text" id="nic" name="nic" placeholder="Enter NIC.." maxlength="10" required>
    <br>
    <br>
    <input type="submit" value="Delete">
  </form>
</div>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(!empty($error)){echo $error;} ?></div>
</div>
</body>
</html>