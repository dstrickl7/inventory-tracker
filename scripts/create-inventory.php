<?php
// Include config file
include "config.php";

// Variables

$amount = $_POST["amount"]; 


$amountFilter = array(
    "amount"=> array('filter'=> FILTER_SANITIZE_NUMBER_FLOAT,
                    'flags'=> FILTER_FLAG_ALLOW_FRACTION
                    )
);

// $pattern = '/[0-9]*\.{0,1}[0-9]*/';

$item = filter_var_array($_POST["item"] , FILTER_SANITIZE_STRING);
$category = filter_var_array($_POST["category"] , FILTER_SANITIZE_STRING);
// $amount = filter_var_array($_POST["amount"] , $amountFilter);
$unit = filter_var_array($_POST["unit"] , FILTER_SANITIZE_STRING);


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
