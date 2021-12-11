<?php
include "scripts/config.php";
include ('./header.php');

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

$my_array = [];


while($item = $result->fetch_assoc()){
    array_push($my_array, $item);
}

$json=json_encode($my_array);

$search_item = strtolower(filter_input(INPUT_GET, "search-item-inv", FILTER_SANITIZE_STRING));
$data = json_decode($json, true);
$found=0;

echo "<div class='container search-item-container'>";
echo "<h2 class='.col-title'>Search Results</h2>";
echo "<div class='scroll-container'>";
foreach ($data as $item) {
    if(str_contains(strtolower($item["item_name"]), $search_item)){
        $found++;
        echo "<p class='search-results'>".$item["item_name"]. " " . $item["amount"] . $item["unit"]."</p>";  
    }
}
if($found==0){
    echo "<p>Item not found</p>";
}

echo "</div>";
echo "<a href='./index.php'>Return</a>"; 
echo "</div>";

$conn->close();
?>
        </section>
    </main>
<script src="dist/bundle.js"></script>
    <script src="scripts/script.js"></script>
</body>