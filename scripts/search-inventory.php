<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Inventory Tracker | Search</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Stylesheet -->
<link rel="stylesheet" href="../styles/style.css">

</head>

<?php
include "config.php";

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

$my_array = [];


while($item = $result->fetch_assoc()){
    array_push($my_array, $item);
}

$json=json_encode($my_array);

$search_item = strtolower(filter_input(INPUT_GET, "search-item-inv", FILTER_SANITIZE_STRING));
$data = json_decode($json, true);


$items=[];

foreach ($data as $item) {
    array_push($items, strtolower($item["item_name"]));
}

if(in_array($search_item, $items, true)){
    foreach($data as $item){
        if($search_item==strtolower($item["item_name"])){
            echo "<div class='container search-item-container'>";
                echo "<p class='search-results'>Found ".$item["item_name"]. " " . $item["amount"] . $item["unit"]."</p>";
                echo "<a href='../index.php'>Return</a>";
            echo "<div>";
        }
    }  
}else{
    echo "<div class='container search-item-container'>";
        echo "<p>Item not found</p>";
        echo "<a href='../index.php'>Return</a>";
    echo "<div>";
}
$conn->close();
?>