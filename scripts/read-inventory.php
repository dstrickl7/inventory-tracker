<?php
include 'config.php';

$sql = "SELECT * FROM inventory";

$result = $conn->query($sql);

// For each row in table, dynamically generate the below HTML
while($item = $result->fetch_assoc()){
    echo "<div class='inventory-item'>";
    echo "<h2>".$item["category"] . "</h2>";
    echo "<p>" . $item["item_name"] . $item["amount"] . $item["unit"] . "</p>";
    echo "</div>";
}
?>

<!-- Sort by category -->
<!-- 
    If items category is the same, print items together
 -->