<?php
// Include config file
include "config.php";

$id = $_GET['id']; 

$sql= "DELETE FROM list WHERE id=?";
$stmt = $conn->prepare($sql);


$stmt->bind_param("i", $id) ;
$stmt->execute();


$stmt->close();
$conn->close();
exec('php list-json.php');
header("location: ../list.php");
?>