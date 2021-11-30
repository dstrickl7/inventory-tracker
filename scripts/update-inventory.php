<?php
include 'config.php';

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$item = filter_input(INPUT_POST,"item", FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_POST, "category", FILTER_SANITIZE_STRING);
$amount = filter_input(INPUT_POST, "amount", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$unit = filter_input(INPUT_POST, "unit", FILTER_SANITIZE_STRING);

$my_array = Array(
    "name"=>$item,
    "amount"=> $amount,
    "category"=> $category,
    "unit"=> $unit);
$json_array = json_encode($my_array);

$sql = "UPDATE inventory SET item_name=?, amount=?, category=?, unit=?, item_info=? WHERE id=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sdsssi", $item, $amount, $category, $unit, $json_array, $id) ;
$stmt->execute();


// Close connection
$stmt->close();
$conn->close();
header("location: ../index.php");
?>