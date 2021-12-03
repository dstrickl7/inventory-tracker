<?php
include "config.php";

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

$my_array = [];


while($item = $result->fetch_assoc()){
    array_push($my_array, $item);
}

$json=json_encode($my_array);

$search_item = strtolower(filter_input(INPUT_POST, "search-item-inv", FILTER_SANITIZE_STRING));
$data = json_decode($json);

print_r($data);

// foreach ($data->item_name as $item) {
//     if ($search_item==$strtolower($item)) {
//         echo $item;
//     }
// }



