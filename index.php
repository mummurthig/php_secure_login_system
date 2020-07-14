<?php
   include('security.php');  
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Welcome</title>
   </head>
   <body>
      <?php
         echo '<h1 > welcome  '.$_SESSION['username'].'</h1>';
         ?>
      <form action="logout.php" method= "POST">     
         <button type="submit"  name="logout_btn"> Logout</button>
      </form>
   </body>
</html>