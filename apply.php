
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
      
      $sql = "INSERT INTO user(fname, lname, nic, email, uname, password) VALUES('$fname', '$name', '$nic', '$email', '$uname', '$pwd')";

         if($db->query($sql) == TRUE){
           header("location: login.php");
         }else{
           echo "Error: " .$sql . "<br>".$db->error;
         }
      }
?>
      <html>
         <head>
            <title>Registration Page</title>
            <link href="style.css" rel="stylesheet" type="text/css">

               <style>
                           body {font-family: Arial, Helvetica, sans-serif; 
                           position: absolute;
                           }
                     * {box-sizing: border-box; }


                     input[type=text], select, textarea {
                         width: 100%;
                         padding: 12px;
                         border: 1px solid #ccc;
                         border-radius: 4px;
                         box-sizing: border-box;
                         margin-top: 6px;
                         margin-bottom: 16px;
                         resize: vertical;
                     }

                     input[type=submit] {
                         background-color: #4CAF50;
                         color: white;
                         padding: 12px 20px;
                         border: none;
                         border-radius: 4px;
                         cursor: pointer;
                     }

                     input[type=submit]:hover {
                         background-color: #45a049;
                     }

                     input[type=reset] {
                         background-color: #4CAF50;
                         color: white;
                         padding: 12px 20px;
                         border: none;
                         border-radius: 4px;
                         cursor: pointer;
                     }

                     input[type=reset]:hover {
                         background-color: #45a049;
                     }

                     a {
                            color: dodgerblue;
                        }


                     .container {
                         border-radius: 5px;
                         background-color: #f2f2f2;
                         padding: 20px;
                         margin-top: 200px;
                         margin-left: 100px;
                         margin-right: 100px;
                     }

                     .signin {
                         background-color: #f1f1f1;
                         text-align: center;
                     }

               </style>
         </head>
         <body>
            <header>
               <div class="row">
                  <div class="logo">
                     <img src="images/3.png">
                  </div>
                  <ul class="nav">
                     <li class="active"><a href="index.php">Home</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                     <li><a href="help.php">Help</a></li>
                    
                  </ul>
               </div>
            </header>
      
        
        
            
         <div class="container">
           <form action="" name="ApplyForm" onSubmit="return checkForm()" method="post">
            <label ><font align="center" >Registration Form</font></label><br/><br/>

             
             <label for="nic"> NIC</label>
             <input type="text" id="nic" name="name" placeholder="Your NIC..">

             <label for="job">Select Job</label>
             
             <select name="job">
                <option>Software Engineer</option>
                <option>Database Developer</option>
                <option>System Administrator</option>
                <option>IT Technician</option>
                <option>Networa Administrator</option>
                <option>Network Architecture</option>
                <option>System Analyst</option>
                <option>Project Manager</option>
              </select>

             
             
             <input type="submit" value="Submit">

            
             <input type="reset" value="Reset">

            
           </form>
         </div>
         
         <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if(!empty($error)){echo $error;} ?></div>
      </div>
   </body>
</html>