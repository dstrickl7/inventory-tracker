<?php
// Include config file
include "config.php";

// Variables
$list_item = $_POST["list_item"];
$list_amount = $_POST["list_amount"];
$list_cost = $_POST["list_cost"];

// MySQL command
$sql = "INSERT INTO list(item_name, amount, cost) VALUES ($list_item, $list_amount, $list_cost)";
// Attempt connection and execute sql command

$conn->query($sql);
$conn->close();


// Return to main page
header("location: ../index.php");