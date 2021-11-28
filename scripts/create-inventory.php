<?php
// Include config file
include "config.php";

// Variables

$item = $_POST["item"];
$category = $_POST["category"];
$amount = $_POST["amount"]; 
$unit = $_POST["unit"];

/*Possibly unable to validate inputs because input names(in index.php) are arrays/indicate array */

/*
$item = filter_var($itemInput, FILTER_SANITIZE_STRING);
$category = filter_var($categoryInput, FILTER_SANITIZE_STRING);
$amount = filter_var($amountInput, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$unit = filter_var($unitInput, FILTER_SANITIZE_STRING);
*/
/*
$item = filter_input_array(INPUT_POST,"item", FILTER_SANITIZE_STRING);
$category = filter_input_array(INPUT_POST, "category", FILTER_SANITIZE_STRING);
$amount = filter_input_array(INPUT_POST, "amount", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$unit = filter_input_array(INPUT_POST, "unit", FILTER_SANITIZE_STRING);
*/





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
    
    
    $stmt->bind_param("sdsss", $item[$i], $amount[$i], $category[$i], $unit[$i], $json_array) ;
    $stmt->execute();
}


// Close connection
$stmt->close();
$conn->close();

// Return to main page
header("location: ../index.php");
