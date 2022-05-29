<?php
session_start();
if(count($_POST > 0)){
include 'db.php';
$result = mysqli_query($con, "SELECT * FROM `users` WHERE username='". $_POST["username"] ."' and password='". $_POST["password"] ."' ");
$row = mysqli_fetch_array($result);
if(is_array($row)){
    header("Location:dash.php");
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    
}else {
    $_SESSION['invalid'] = 'Invalid username or password.';
    header("Location:login.php");

}
}

?>