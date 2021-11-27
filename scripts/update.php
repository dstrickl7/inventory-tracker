<?php
include 'config.php';

$id = $_POST['id'];
$item =$_POST['item'];
$amount =$_POST['amount'];
$unit =$_POST['unit'];
$category = $_POST['category'];
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