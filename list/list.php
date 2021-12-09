<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: ../login.php');
};
?>

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
                <a href="#" aria-label="homepage" class="logo-text"><img src="../styles/icons/shopping-list.svg" alt="The Kitchen Tracker" class="logo-img" aria-hidden="true">The Kitchen Tracker</a>
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
                    <li class="navitem"><a href="list.php" class="navlink" aria-current="page">Shopping List</a></li>
                    <button class="logout btn btn-fill">Logout</button>
                </ul>
                
            </div>     
        </nav>
        <!-- Navbar end -->
        <div class="overlay"></div>
    </header>
    <main>
         <!--  List section begins  -->
        <section class="list" id="list">
            <!-- List Container -->
            <div class="container main-container">
                <h1 class="title main-title">List</h1>
            <!-- Display list items -->
                <div class="scroll-container">
                    <table>
                        <?php include "../scripts/read-list.php" ;?>
                    </table>
                   
                    
                </div>
                <!-- List total container -->
                <div class="total-container">
                        <label for='tax'>Tax rate:</label>
                        <input type='number' name='tax' step='.25' min='0' max='20' value='0' id="tax">
                        <p>Est. Total: <p id='total'></p></p>
                    </div>
                <!-- Button to add items -->
                <div class="btn-container">
                    <button class="add-btn btn-fill btn" id="add-list" type="button">Add Items</button>
                </div>
                
            </div>
        <!-- End List Container -->

            <!-- Add list items container -->
            <div class="container add-container list-add">
                <button type='button' aria-label='close' class='close-btn'>
                    <svg class="list-add-container-close" xmlns="http://www.w3.org/2000/svg" width="15.556" height="15.556" viewBox="0 0 15.556 15.556">
                        <path fill="#000000" id="list-icon-close" d="M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z" transform="translate(-0.222 -0.222)" fill-rule="evenodd"/>
                    </svg>
                </button>
                <!-- Form -->
                <form action="../scripts/create-list.php" method="post" class="form-container">
                    <!-- Input container -->
                    <div class="li-items-cont">
                        <div class="li-item-cont">
                            <div class="inputs">
                                <label for="list-item">Item</label>
                                <input type="text" name="list-item[]" id="list-item" required>
                            </div>
                            <div class="inputs">
                                <label for="list-amount">Amount</label>
                                <input type="number" name="list-amount[]" id="list-amount" step=".25" min="0" max="1000">
                            </div>
                            <div class="inputs">
                                <label for="cost">Est. Cost</label>
                                <input type="number" name="list-cost[]" id="list-cost" step=".01" min="0" max="1000">
                            </div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="btn-nofill btn" id="add-item-list" type="button">More items</button>
                        <button class="btn-nofill btn remove-btn" id="remove-item-list" type="button">Less items</button>
                        <button type="submit" class="btn-fill btn">Save</button>
                    </div>   
                </form>
                    <!-- Form ends -->
                    </div>
            <!-- End List Container -->
        </section>
    </main>
    <script src="../dist/bundle.js"></script>
    <script src="../scripts/list-scripts.js"></script>
   
</body>
</html>