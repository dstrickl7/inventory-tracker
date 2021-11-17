<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Inventory Tracker</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

<!-- Stylesheet -->
<link rel="stylesheet" href="../styles/style.css">

</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="logo-container">
                <a href="#" aria-label="homepage" class="logo-text"><img src="../styles/icons/shopping-list.svg" alt="The Kitchen Tracker" class="logo-img">The Kitchen Tracker</a>
            </div>
            <div class="nav-icon-container">
                <button class="nav-icon hamburger">
                    <img src="../styles/icons/hamburger.svg" alt="open menu" class="nav-icon-img">
                </button>
                <button class="nav-icon close">
                    <img src="../styles/icons/icon-close.svg" alt="close menu" class="nav-icon-img">
                </button>
            </div>
            <div class="navlist-container">
                <ul class="navlist">
                    <li class="navitem"><a href="" class="navlink">Inventory</a></li>
                    <li class="navitem"><a href="" class="navlink">Shopping List</a></li>
                </ul>
            </div>     
        </nav>
        <!-- Navbar end -->
        <div class="overlay"></div>
    </header>
    <main>
        <section class="inventory">
            <!-- Inventory Container -->
            <div class="container main-container">
            <!-- Display inventory items -->
            <?php include "scripts/read.php" ;?>
            <!-- Button to add items -->
            <button class="add-btn btn-fill" id="add-inventory">Add Items</button>
            <!-- Add inventory container -->
                <div class="container add-container inventory-add">
                <!-- Form -->
                <div class="form-container">
                    <form action="scripts/create.php" method="post">
                        <label for="item">Item</label>
                        <input type="text" name="item" id="item" required>
                        <label for="category">Category</label>                      
                        <select name="category" id="category-select">
                            <option value="uncategorized">Uncategorized</option>
                            <option value="produce">Produce</option>
                            <option value="meat">Meat & Poultry</option>
                            <option value="dairy">Dairy & Eggs</option>
                            <option value="grains">Grains, Rice, & Beans</option>
                            <option value="spices">Spices & Seasonings</option>
                        </select>
                        <label for="amount">Amount</label>
                        <input type="number" name="amount" id="amount" step=".25" min="0" max="1000">
                        <button class="btn-nofill">More items</button>
                        <button type="submit" class="btn-fill">Save</button>
                    </form>
                </div>
                  
                    <!-- Form ends -->
                </div>
            </div>

            <!-- End Inventory Container -->
        </section>
        <section class="list">
            <!-- List Container -->
            <div class="container main-container">
            <!-- Display list items -->
            <?php include "scripts/read.php" ;?>
            <!-- Button to add items -->
            <button class="add-btn btn-fill" id="add-list">Add Items</button>
                </div>
            <!-- End List Container -->
            
            
            <!-- Add list items container -->
                <div class="container add-container list-add">
                <!-- Form -->
                <div class="form-container">
                    <form action="scripts/create.php" method="post">
                        <label for="list-item">Item</label>
                        <input type="text" name="list-item" id="list-item" required>
                        <label for="list-amount">Amount</label>
                        <input type="number" name="list-amount" id="list-amount" step="1" min="0" max="100">
                        <label for="cost">Est. Cost</label>
                        <input type="number" name="list-amount" id="list-amount" step="1" min="0" max="1000">
                        <button class="btn-nofill">More items</button>
                        <button type="submit" class="btn-fill">Save</button>
                    </form>
                </div>
                <!-- Form ends -->
                </div>
        </section>
    
    
    </main>
    
   
</body>
</html>