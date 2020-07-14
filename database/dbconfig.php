<?php

$db_server = "localhost";
$db_username= "root";
$db_password = "";
$db_name = "admin_db";

$connect = mysqli_connect($db_server,$db_username,$db_password);
$db_config = mysqli_select_db($connect,$db_name);

if($db_config){
    
    // echo 'database Connected';
}
else{
    echo 'database not Connected';
}

?>