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
$sql= "UPDATE inventory SET item_name='$item', amount='$amount', unit='$unit', category='$category', item_info='$json_array' WHERE id='$id'";
$result = $conn->query($sql);
$conn->close();
header("location: ../index.php");
?>