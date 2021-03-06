<?php
// Include config file
include "config.php";

// Variables
$item = filter_var_array($_POST["item"] , FILTER_SANITIZE_STRING);
$category = filter_var_array($_POST["category"] , FILTER_SANITIZE_STRING);
$unit = filter_var_array($_POST["unit"] , FILTER_SANITIZE_STRING);
$amountArray = $_POST["amount"]; 
$amount=Array();

foreach($amountArray as $amt){
    filter_var($amt, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    array_push($amount, $amt);
}

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
