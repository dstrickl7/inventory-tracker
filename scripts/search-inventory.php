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
<header>
<nav class="navbar">
            <div class="logo-container">
                <a href="../index.php" aria-label="homepage" class="logo-text"><img src="../styles/icons/shopping-list.svg" alt="The Kitchen Tracker" class="logo-img" aria-hidden="true">The Kitchen Tracker</a>
            </div>
            <div class="nav-icon-container">
                <button class="nav-icon hamburger" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="../styles/icons/hamburger.svg" alt="open menu" class="nav-icon-img">
                </button>
                <button class="nav-icon close" type="button" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <img src="../styles/icons/icon-close.svg" alt="close menu" class="nav-icon-img">
                </button>
            </div>
            <div class="navlist-container">
                <ul class="navlist">
                    <li class="navitem"><a href="../index.php" class="navlink">Inventory</a></li>
                    <li class="navitem"><a href="../list/list.php" class="navlink">Shopping List</a></li>
                    <li class="navitem"><button class="navlink search-btn" id="search" aria-current="page">Search</button></li>
                    <form action="search-inventory.php" method="GET" class="search-container">
                        <label for="search-item-inv">Search</label>
                        <input type="text" name="search-item-inv" id="search-item-inv" required>
                        <div class="btn-container">
                            <button type="submit" class="btn-fill btn" id="search-btn">Search</button>
                        </div> 
                    </form>
                    <button class="logout btn btn-fill">Logout</button>
                </ul>
               
            </div>     
        </nav>
        <!-- Navbar end -->
        <div class="overlay"></div>
</header>
<body>
    <main>
        <section class="search"> 
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
$found=0;

echo "<div class='container search-item-container'>";
echo "<h2 class='.col-title'>Search Results</h2>";
foreach ($data as $item) {
    if(str_contains(strtolower($item["item_name"]), $search_item)){
        $found++;
        echo "<p class='search-results'>".$item["item_name"]. " " . $item["amount"] . $item["unit"]."</p>";  
    }
}
if($found==0){
    echo "<p>Item not found</p>";
}
echo "<a href='../index.php'>Return</a>"; 
echo "</div>";

$conn->close();
?>
        </section>
    </main>
<script src="../dist/bundle.js"></script>
    <script src="./script.js"></script>
</body>