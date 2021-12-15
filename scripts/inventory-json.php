<?php
include 'config.php';

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

$my_array = [];

while($item = $result->fetch_assoc()){
    array_push($my_array, $item);
}

// Return data as JSON
$json=json_encode($my_array);
echo($json);
header('Content-Type: application/json; charset=utf-8');

$conn->close();
?>
