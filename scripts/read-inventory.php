<?php
include 'config.php';

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

// Initialize empty category array
$categories = Array();

// For each row in table, dynamically generate the below HTML
while($item = $result->fetch_assoc()){
   
    $things =json_decode($item["item_info"]);
    // check if array has category if it doesn't, push the category into the array
    if(!in_array($things->category, $categories)){
        array_push($categories, $things->category);
    }

    if (isset($_GET['id']) && $item['id'] == $_GET['id']) {
        // Form displays at top of container and does not show the item name of the item it's altering. Changes are also not saved
       echo "<div class='overlay-edit active'></div>";
        echo "<div class='container inventory-edit'>";
            echo "<button type='button' aria-label='close' class='close-btn'><svg class='edit-close' xmlns='http://www.w3.org/2000/svg' width='15.556' height='15.556' viewBox='0 0 15.556 15.556'>";
                echo "<path fill='#000000' d='M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z' transform='translate(-0.222 -0.222)' fill-rule='evenodd'/>";
            echo "</svg></button>";
            echo '<form action="scripts/update-inventory.php" method="POST" class="update-form-container">'; 
                echo "<div class='inv-items-cont'>";
                    echo "<div class='inv-item-cont'>";   
                        /*Item name input */
                        echo "<div class='inputs'>";
                                echo "<input type='text' name='item' value='" . $item["item_name"] . "'>";
                        echo "</div>";
                        /*Item category input */
                        echo "<div class='inputs'>";
                            echo "<select name='category' value='" . $item["category"] . "' >
                                <option value='uncategorized'>Uncategorized</option>
                                <option value='produce'>Produce</option>
                                <option value='meat & poultry'>Meat & Poultry</option>
                                <option value='dairy & eggs'>Dairy & Eggs</option>
                                <option value='grains, rice, & beans'>Grains, Rice, & Beans</option>
                                <option value='spices & seasonings'>Spices & Seasonings</option>
                                <option value='condiments, vinegars, & oils'>Condiments, Vinegars, & Oils</option>
                                <option value='baking essentials'>Baking Essentials</option>
                            </select>";
                        echo "</div>";
                        /*Item amount input */
                        echo "<div class='inputs amt-input'>";
                                echo "<input type='number' name='amount' step='.25' min='0' max='1000' value='" . $item["amount"] . "'>";
                        echo "</div>";
                        /*Item unit input */
                        echo "<div class='inputs unit-input'>";
                            echo "<select name='unit' value='" . $item['unit'] . "'>
                            <option value='ea'>ea</option>
                            <option value='lbs'>lbs</option>
                            <option value='oz'>oz</option>
                            <option value='pcs'>pcs</option>
                            <option value='cntr'>cntr</option>
                            </select>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            /*Save button */
            echo "<div class='btn-container'>";
                echo '<button type="submit" class="btn-fill btn btn-md">Save</button>';
            echo "</div>";
                echo '<input type="hidden" name="id" value="'.$item['id'].'">';
            
        echo '</form>';
    echo "</div>";
    }    
}

// reset the result pointer to first row
$result->data_seek(0);

// Print categories if they exist
foreach($categories as $category){
    echo "<div class='category-container'>";
    echo "<h2 class='category-title'>" . $category . "</h2>";
    // Dynamically add items to their respective categories
    while($item = $result->fetch_assoc()){
        if($item["category"]==$category){
        // If items category matches the current category, print all items
        
            echo "<div class='item-container'>";
            echo "<p class='item-name'>" . $item["item_name"] . "</p>";
                echo "<div class='item-amount-cont'>";
                echo "<p>" . $item["amount"] . $item["unit"] . "</p>" ;
                    echo "<div class='btn-container'>";
                    // Update button
                    echo "<a href='../index.php?id=" . $item['id'] . "' role='button' class='update-btn'><img src='styles/icons/shopping-list.svg' alt='Update'></a>";
                    // Delete button
                    echo "<a href='scripts/delete-inventory.php?id=" . $item['id'] . "' role='button' class='delete-btn'><img src='styles/icons/trashcan.svg' alt='Delete'></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }    
    }
    echo "</div>";
    $result->data_seek(0);
    
}

if(count($categories)==0){
    echo "<p>No items</p>";
    echo "<p>You should probably go shopping</p>";
}



$conn->close();
?>
