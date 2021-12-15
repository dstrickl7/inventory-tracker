<?php
include 'config.php';

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$list_item = filter_input(INPUT_POST,"list-item", FILTER_SANITIZE_STRING);
$list_amount = filter_input(INPUT_POST, "list-amount", FILTER_SANITIZE_NUMBER_INT);
$list_cost = filter_input(INPUT_POST, "list-cost", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

$my_array = Array(
    "name"=>$list_item,
    "amount"=> $list_amount,
    "cost"=> $list_cost);
$json_array = json_encode($my_array);

$sql = "UPDATE list SET item_name=?, amount=?, cost=?, item_info=? WHERE id=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sidsi", $list_item, $list_amount, $list_cost,  $json_array, $id) ;
$stmt->execute();



// Close connection
$stmt->close();
$conn->close();

header("location: ../list.php");

?>

