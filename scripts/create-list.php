<?php
// Include config file
include "config.php";
// include "list-json.php";

// Variables
$list_item = filter_var_array($_POST["list-item"] , FILTER_SANITIZE_STRING);
$list_amount = filter_var_array($_POST["list-amount"] , FILTER_SANITIZE_NUMBER_INT);
$costArray = $_POST["list-cost"]; 
$list_cost = Array();

foreach($costArray as $cst){
    filter_var($cst, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    array_push($list_cost, $cst);
}

// MySQL command stored inside variable
for($i = 0; $i < count($_POST['list-item']); $i++) {
    $my_array = Array(
        "name"=>$list_item[$i],
        "amount"=> $list_amount[$i],
        "cost"=> $list_cost[$i]);
    $json_array = json_encode($my_array);

    $sql = "INSERT INTO list(item_name, amount, cost, item_info) values (?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sids", $list_item[$i], $list_amount[$i], $list_cost[$i], $json_array);
    $stmt->execute();
    
}


// Close connection
$stmt->close();
$conn->close();
exec('php list-json.php');
header("location: ../list/list.php");
?>