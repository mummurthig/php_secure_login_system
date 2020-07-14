<?php
   session_start();
   ?>
<!DOCTYPE html>
<html >
   <head>
      <title>Login Page</title>
   </head>
   <body >
      <?php 
         if(isset($_SESSION['status']) && $_SESSION['status'] !='')
         {
             echo'<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
             unset($_SESSION['status']);
         }
         
         ?>
      <form action="code.php" method="post"  class="md-float-material form-material" >
         <div align="center">
            <h2 class="text-muted text-center p-b-5">Sign in with your regular account</h2>
            <br>
            Email: <input type="text" name="email" class="form-control" required=""><br><br>
            Password :<input type="password" name="password" class="form-control" required=""><br>
            <a href="add_admin.php" class="text-right f-w-600"> New account</a><br>
            <button type="submit" name="login_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
         </div>
      </form>
   </body>
</html>