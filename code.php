<?php
   include('security.php');
   require "database/dbconfig.php";
   
   //login
   if(isset($_POST['login_btn']))
   {
       $email_login =  $_POST['email'];
       $salt = "Jfdjdjfm74774hfbd7f8";
       $password_login = $_POST['password'].$salt;
       $password_login = sha1($password_login);
   
       $query = "SELECT * FROM super_admin WHERE email='$email_login' AND password = '$password_login' ";
       $query_run = mysqli_query($connect, $query);
       $usertype = mysqli_fetch_array($query_run);
   
       if($usertype['usertype'] == 'admin')
       {
           $_SESSION['username'] = $email_login;
           header('Location:index.php');
       }
       else if($usertype['usertype'] == 'executive_admin')
       {
           $_SESSION['username'] = $email_login;
           header('Location:index.php');
       }
       else if($usertype['usertype'] == 'executive')
       {
           $_SESSION['username'] = $email_login;
           header('Location:index.php');
       }
       else
       {
           $_SESSION['status'] = "Invalid User Details";
           header('Location:login.php');
       }
   }
   
   
   //Create New Account
   if(isset($_POST['add_new_admin'])){
       $username = $_POST['username'];
       $email = $_POST['email'];
       $salt = "Jfdjdjfm74774hfbd7f8";
       $password = $_POST['password'].$salt;
       $password = sha1($password);
       $usertype = $_POST['usertype'];
       $query = "INSERT INTO super_admin(username, email, password, usertype) VALUES('$username', '$email', '$password', '$usertype')";
       $result = mysqli_query($connect, $query);
   
       if($result){
           $_SESSION['success'] = "Account Created ";
           header('location:add_admin.php');
       }
       else{
           $_SESSION['status'] = "Account Created Failed ";
           header('location:add_admin.php');
       }
   }
   
?>