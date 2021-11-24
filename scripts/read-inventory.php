<?php
include 'config.php';

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

$categories = Array();



// For each row in table, dynamically generate the below HTML
while($item = $result->fetch_assoc()){
 
    $things =json_decode($item["item_info"]);
    // initialize an empty array. check if array has category if it doesn't, push the category into the array
    
    if(!in_array($things->category, $categories)){
        array_push($categories, $things->category);
    }
    

}


$result->data_seek(0);

foreach($categories as $category){
    echo "<div>";
    echo "<h2 class='category-title'>" . $category . "</h2>";
    
    while($item = $result->fetch_assoc()){
    // If items category matches the current category, print all items, else print next category
        if($item["category"]==$category){
            echo "<div>";
            echo "<p>" . $item["item_name"] . " " . $item["amount"] . $item["unit"] ."</p>";
            echo "</div>";
        }
    }
    echo "</div>";
    $result->data_seek(0);
    
}

if(count($categories)==0){
    echo "<p>No items</p>";
    echo "<p>You should probably go shopping</p>";
}



?>

<!-- Sort by category -->
<!-- 
    If items category is the same, print items together
 -->