<?php
// Include config file
include "config.php";

$id = $_GET['id']; //Get id from row Delete was clicked
$sql= "DELETE FROM inventory WHERE id=$id";
$result = $conn->query($sql);
$conn->close();
header("location: ../index.php");
?>