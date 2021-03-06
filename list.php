<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
};

include ('header.php');
?>

    <main>
         <!--  List section begins  -->
        <section class="list" id="list">
            <!-- List Container -->
            <div class="container main-container">
                <h1 class="title main-title">Shopping List</h1>
            <!-- Display list items -->
                <div class="scroll-container">
                    <table>
                        <?php include "scripts/read-list.php" ;?>
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
                    <button class="add-btn btn-fill btn btn-lg" id="add-list" type="button">Add Items</button>
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
                                <input type="number" name="list-amount[]" id="list-amount" step="1" min="0" max="100">
                            </div>
                            <div class="inputs">
                                <label for="cost">Est. Cost</label>
                                <input type="number" name="list-cost[]" id="list-cost" step=".01" min="0" max="1000">
                            </div>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="btn-nofill btn btn-sm" id="add-item-list" type="button">More items</button>
                        <button class="btn-nofill btn remove-btn btn-sm" id="remove-item-list" type="button">Less items</button>
                        <button type="submit" class="btn-fill btn btn-sm">Save</button>
                    </div>   
                </form>
                    <!-- Form ends -->
                    </div>
            <!-- End List Container -->
        </section>
    </main>
    <script src="dist/bundle.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/list-scripts.js"></script>
   
</body>
</html>