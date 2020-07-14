<?php
   session_start();
   ?>
<html>
   <head>
      <title>new  account</title>
   </head>
   <body>
      <?php
         if(isset($_SESSION['success']) && $_SESSION['success'] !='')
         {
            echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
         }
         
         if(isset($_SESSION['status']) && $_SESSION['status'] !='')
         {
            echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
         }
         
         ?>
      <form id="main" method="post" action="code.php" >
         <div align="center">
            Username: <input type="text" class="form-control" name="username" id="name"  required><br><br>
            Email :<input type="email" class="form-control" id="email" name="email" ><br><br>
            Password :<input type="password" class="form-control" id="password" name="password" ><br><br>
            Choose Usertype:
            <select name="usertype"  class="form-control" >
               <br><br>
               <option value="admin">Admin</option>
               <option value="executive_admin">Executive Admin</option>
               <option value="executive">Executive</option>
            </select>
            <br><br>
            <button type="submit" name="add_new_admin" class="btn btn-primary m-b-0">Submit</button><br>
            <a href="login.php" class="text-right f-w-600"> Alredy Have account Login</a><br>
         </div>
      </form>
   </body>
</html>