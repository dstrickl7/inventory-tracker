<?php
session_start();
$_SESSION['user_id']=123456;
header("location: index.php");
?>
