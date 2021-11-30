<?php
// Include config file
include "config.php";

$id = $_GET['id'];

$sql= "DELETE FROM inventory WHERE id=?";
$stmt = $conn->prepare($sql);


$stmt->bind_param("i", $id) ;
$stmt->execute();

$stmt->close();
$conn->close();
header("location: ../index.php");
?>