<?php
session_start();
echo 'Welcome '.$_SESSION['username'].'  ';
?>
<a href="logout.php">Log Out</a>
