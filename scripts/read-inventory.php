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


    
   
    
    


    // If there are no items to display say no items, else show items


//else{
    //     echo "<div class='inventory-item'>";
    //     echo "<p>" . $item[htmlspecialchars("item_name")] . $item["amount"] . $item[htmlspecialchars("unit")] . "</p>";
    //     echo "</div>";
    // } 
}
foreach($categories as $category){
    echo "<div class='inventory-item'>";
    echo "<h2>" . $category . "</h2>";
    echo "</div>";
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