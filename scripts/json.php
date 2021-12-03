<?php
include 'config.php';

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

$my_array = [];


while($item = $result->fetch_assoc()){
    array_push($my_array, $item);
}

$json=json_encode($my_array);
print_r($json_array);

$conn->close();
?>
