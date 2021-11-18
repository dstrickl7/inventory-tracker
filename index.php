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
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
                <h1 class="title main-title">Inventory</h1>
            <!-- Display inventory items -->
                <?php include "scripts/read-inventory.php" ;?>
                <!-- Button to add items -->
                <div class="btn-container">
                    <button class="add-btn btn-fill btn" id="add-inventory">Add Items</button>
                </div>
                
            </div>
            <!-- Add inventory container -->
            <div class="container add-container inventory-add">
                <svg class="add-container-close" xmlns="http://www.w3.org/2000/svg" width="15.556" height="15.556" viewBox="0 0 15.556 15.556">
                    <path fill="#000000" id="icon-close" d="M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z" transform="translate(-0.222 -0.222)" fill-rule="evenodd"/>
                </svg>
                <!-- Form -->
                    <form action="scripts/create-inventory.php" method="post" class="form-container">
                        <div class="input-container">
                            <div class="inputs">
                                <label for="item">Item</label>
                                <input type="text" name="item" id="item" required>
                            </div>
                            <div class="inputs">
                                <label for="category">Category</label> 
                                <select name="category" id="category-select">
                                    <option value="uncategorized">Uncategorized</option>
                                    <option value="produce">Produce</option>
                                    <option value="meat">Meat & Poultry</option>
                                    <option value="dairy">Dairy & Eggs</option>
                                    <option value="grains">Grains, Rice, & Beans</option>
                                    <option value="spices">Spices & Seasonings</option>
                                </select>
                            </div>
                            <div class="inputs">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" id="amount" step=".25" min="0" max="1000">
                            </div>
                            <button class="delete-btn">
                                <img src="styles/icons/trashcan.svg" alt="Delete">
                            </button>
                        </div>
                        <div class="btn-container">
                            <button class="btn-nofill btn">More items</button>
                            <button type="submit" class="btn-fill btn">Save</button>
                        </div>   
                    </form>
                    <!-- Form ends -->
                </div>
            <!-- End Inventory Container -->
        </section>
        <section class="list">
        
            <!-- List Container -->
            <div class="container main-container">
                <h1 class="title main-title">List</h1>
            <!-- Display list items -->
                <?php include "scripts/read-list.php" ;?>
                <!-- Button to add items -->
                <div class="btn-container">
                    <button class="add-btn btn-fill btn" id="add-list">Add Items</button>
                </div>
                
            </div>
            <!-- End List Container -->
            
            
            <!-- Add list items container -->
                <div class="container add-container list-add">
                    <svg class="add-container-close" xmlns="http://www.w3.org/2000/svg" width="15.556" height="15.556" viewBox="0 0 15.556 15.556">
                        <path fill="#000000" id="icon-close" d="M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z" transform="translate(-0.222 -0.222)" fill-rule="evenodd"/>
                    </svg>
                <!-- Form -->
                    <form action="scripts/create-list.php" method="post" class="form-container">
                        <div class="input-container">
                            <label for="list-item">Item</label>
                            <input type="text" name="list-item" id="list-item" required>
                        </div>
                        <div class="input-container">
                            <label for="list-amount">Amount</label>
                            <input type="number" name="list-amount" id="list-amount" step="1" min="0" max="100">
                        </div>
                        <div class="input-container">
                            <label for="cost">Est. Cost</label>
                            <input type="number" name="list-cost" id="list-cost" step="1" min="0" max="1000">
                        </div>
                        <div class="btn-container">
                            <button class="btn-nofill btn">More items</button>
                            <button type="submit" class="btn-fill btn">Save</button>
                        </div>
                    </form>
                <!-- Form ends -->
                </div>
        </section>
    
    
    </main>
    <script src="scripts/scripts.js"></script>
   
</body>
</html>