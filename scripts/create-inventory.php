<?php
// Include config file
include "config.php";

// Variables
$item = $_POST["item"];
$category = $_POST["category"];
$amount = $_POST["amount"];

// MySQL command
$sql = "INSERT INTO inventory(item_name, amount, category) VALUES ('$item', '$amount', '$category')";
// Attempt connection and execute sql command

$conn->query($sql);
$conn->close();

// Return to main page
header("location: ../index.php");