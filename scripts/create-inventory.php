<?php
// Include config file
include "config.php";

// Variables
$item = $_POST["item"];
$category = $_POST["category"];
$amount = $_POST["amount"];
$unit = $_POST["unit"];


// Checks the number of items are present and inserts each item into the db
for($i = 0; $i < count($_POST['item']); $i++) {
    $my_array = Array(
        "name"=>$item[$i],
        "amount"=> $amount[$i],
        "category"=> $category[$i],
        "unit"=> $unit[$i]);
    $json_array = json_encode($my_array);

    $sql = "INSERT INTO inventory(item_name, amount, category, unit, item_info) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    
    
    $stmt->bind_param("sisss", $item[$i], $amount[$i], $category[$i], $unit[$i], $json_array) ;
    $stmt->execute();
}


// Close connection
$conn->close();

// Return to main page
header("location: ../index.php");
