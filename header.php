<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Inventory Tracker</title>
    <link rel="icon" type="image/png" sizes="32x32" href="styles/icons/favicon.ico">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Stylesheet -->
<link rel="stylesheet" href="styles/style.css">

</head>
<body id="body">
    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="logo-container">
                <a href="index.php" aria-label="homepage" class="logo-text"><img src="styles/icons/shopping-list.svg" alt="The Kitchen Tracker" class="logo-img" aria-hidden="true">The Kitchen Tracker</a>
            </div>
            <div class="nav-icon-container">
                <button class="nav-icon hamburger" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="styles/icons/hamburger.svg" alt="open menu" class="nav-icon-img">
                </button>
                <button class="nav-icon close" type="button" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <img src="styles/icons/icon-close.svg" alt="close menu" class="nav-icon-img">
                </button>
            </div>
            <div class="navlist-container">
                <ul class="navlist">
                    <li class="navitem"><a href="index.php" class="navlink" aria-current="page">Inventory</a></li>
                    <li class="navitem"><a href="list.php" class="navlink">Shopping List</a></li>
                    <li class="navitem"><button class="navlink search-btn" id="search">Search</button></li>
                    <form action="search-inventory.php" method="GET" class="search-container">
                        <label for="search-item-inv">Search</label>
                        <input type="text" name="search-item-inv" id="search-item-inv" required>
                        <div class="btn-container">
                            <button type="submit" class="btn-fill btn" id="search-btn">Search Inventory</button>
                        </div> 
                    </form>
                    <div class="bg-change-container">
                    <p>Change Background:</p>
                        <div>
                            <button type="button" class="bg-change green" id="green"></button>
                            <button type="button" class="bg-change blue" id="blue"></button>
                            <button type="button" class="bg-change salmon" id="salmon"></button>
                            <button type="button" class="bg-change grey" id="grey"></button>
                        </div>
                    </div>
                    <button class="logout btn btn-fill">Logout</button>
                </ul>
               
            </div>     
        </nav>
        <!-- Navbar end -->
        <div class="overlay"></div>
    </header>