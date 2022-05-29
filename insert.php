<?php
session_start();
include 'db.php';
if($_POST > 0){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";

   $result =  mysqli_query($con, $sql );

   if($result){
       $_SESSION['create_success'] = 'Account created successfully!!!';
       header('Location:login.php');
   }
   else{
    $_SESSION['create_failed'] = 'Failed to create account!!!'; 
   }
}

?>