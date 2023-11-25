

<?php
   ob_start();
   session_start();
?>



<html>
   
   <head>
      <title>Login Session</title>
      <link rel="stylesheet" type="text/css" href="mystyles.css">
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div>
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'rumanhassan25' && 
                  $_POST['password'] == '1234567') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'rumanhassan25';
                  
                  echo"Correct credentials";
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method = "post">
            <h4 ><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" name = "username" required autofocus></br>
            <input type = "password" class = "form-control" name = "password" required>
            <button  type = "submit" name = "login">Login</button>
         </form>
			
      <button><a href="logout.php">Logout</a></button>
         
      </div> 
      
   </bod