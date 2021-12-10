<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
};
include ('header.php');
?>


    <main>
        <section class="inventory" id="inventory"> 
            <!-- Inventory Container -->
            <div class="container main-container">
                <h1 class="title main-title">Inventory</h1>
            <!-- Display inventory items -->
                <div class="scroll-container inventory-scroll">
                    <?php include "scripts/read-inventory.php" ;?>
                </div>
                
                <!-- Button to add items -->
                <div class="btn-container">
                    <button class="add-btn btn-fill btn btn-lg" id="add-inventory">Add Items</button>
                </div>
                
            </div>
            <!-- Add inventory container -->
            <div class="container add-container inventory-add">
                <button type='button' aria-label='close' class='close-btn'>
                    <svg class="add-container-close" xmlns="http://www.w3.org/2000/svg" width="15.556" height="15.556" viewBox="0 0 15.556 15.556">
                        <path fill="#000000" id="icon-close" d="M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z" transform="translate(-0.222 -0.222)" fill-rule="evenodd"/>
                    </svg>
                </button>
                <!-- Form -->
                <form action="scripts/create-inventory.php" method="post" class="form-container">
                    <!-- Input container -->
                    <div class="inv-items-cont">
                        <div class="inv-item-cont">
                            <div class="inputs">
                                <label for="item">Item</label>
                                <input type="text" name="item[]" id="item" required>
                            </div>
                            <div class="inputs">
                                <label for="category">Category</label> 
                                <select name="category[]" id="category-select">
                                    <option value="uncategorized">Uncategorized</option>
                                    <option value="produce">Produce</option>
                                    <option value="meat & poultry">Meat & Poultry</option>
                                    <option value="dairy & eggs">Dairy & Eggs</option>
                                    <option value="grains, rice, & beans">Grains, Rice, & Beans</option>
                                    <option value="spices & seasonings">Spices & Seasonings</option>
                                    <option value="condiments, vinegars, & oils">Condiments, Vinegars, & Oils</option>
                                    <option value="baking essentials">Baking Essentials</option>
                                </select>
                            </div>
                            <div class="inputs amt-input">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount[]" id="amount" step=".25" min="0" max="1000">
                            </div>
                            <div class="inputs unit-input">
                                <label for="unit">Units</label> 
                                <select name="unit[]" id="unit-select">
                                    <option value="ea">ea</option>
                                    <option value="lbs">lbs</option>
                                    <option value="oz">oz</option>
                                    <option value="pcs">pcs</option>
                                    <option value="cntr">cntr</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="btn-nofill btn btn-sm" id="add-item-inv" type="button">More items</button>
                        <button class="btn-nofill btn btn-sm remove-btn" id="remove-item-inv" type="button">Less items</button>
                        <button type="submit" class="btn-fill btn btn-sm">Save</button>
                    </div>   
                </form>
                <!-- Form ends -->
            </div>
            <!-- End Inventory Container -->
        </section>
        <!-- Inventory section ends -->

    
    </main>

    <script src="dist/bundle.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/inventory-scripts.js"></script>
   
</body>
</html>