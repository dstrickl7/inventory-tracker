<?php
// Include config file
include "config.php";

// Variables
$item = $_POST["item"];
$category = $_POST["category"];
$amount = $_POST["amount"];

// Add ability to sanitize user inputs
// MySQL command

$array = Array(
    "name"=>$item,
    "amount"=> $amount,
    "category"=> $category);
$json_array = json_encode($array);
$sql = "INSERT INTO inventory(item_name, amount, category, item_info) VALUES ('$item', '$amount','$category', '$json_array')";


// Attempt connection and execute sql command
$conn->query($sql);
$conn->close();

// Return to main page
header("location: ../index.php");