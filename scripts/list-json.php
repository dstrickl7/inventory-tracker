<?php
include 'config.php';

$sql = "SELECT * FROM list";
$result = $conn->query($sql);

$my_array = [];

while($item = $result->fetch_assoc()){
    array_push($my_array, $item);
}

$json=json_encode($my_array);
print_r($json);

file_put_contents('list-data.json', $json);

$conn->close();
?>