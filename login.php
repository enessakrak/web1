<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT korisnikID FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      //   session_register("myusername");
         $_SESSION['login_user'] = $myusername;
      if($myusername =="amra" || $myusername =="pero")
			 
         header("location: amra.php");
	  if($myusername =="azrudin" || $myusername =="danijel" || $myusername =="begzad" || $myusername =="dragana" || $myusername =="oleg")
			 
         header("location: unos.php");
		  
		if($myusername=="shifo" || $myusername=="enes")
			header("location: unos.php");
      }
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Subvencije - Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login informacije</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post"  align = "center">
                  <label>Korisničko ime:</label>
				  <br />
				  <input type = "text" name = "username" class = "box"/><br /><br /><br /><br />
                  <label>Šifra:</label>
				  <br />
				  <input type = "password" name = "password" class = "box" /><br/><br /><br />
                  <input type = "submit" value = " Login "/><br /><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
			   <?php   
			   /* $error = "Your Login Name or Password is invalid"; 
			   echo $error; */ 
			   ?> 
			   </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>