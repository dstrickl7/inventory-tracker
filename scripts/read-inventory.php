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
        echo '<form action="scripts/update.php" method="POST" class="update-form">';
            echo "<div class='update-inputs'>";
                echo "<input type='text' name='item' value='" . $item["item_name"] . "'>";

        echo "<select name='category' value='" . $item["category"] . "' >
            <option value='uncategorized'>Uncategorized</option>
            <option value='produce'>Produce</option>
            <option value='meat & poultry'>Meat & Poultry</option>
            <option value='dairy & eggs'>Dairy & Eggs</option>
            <option value='grains, rice, & beans'>Grains, Rice, & Beans</option>
            <option value='spices & seasonings'>Spices & Seasonings</option>
            <option value='baking essentials'>Baking Essentials</option>
        </select>";

                echo "<input type='number' name='amount' step='.25' min='0' max='1000' value='" . $item["amount"] . "'>";
            
                echo "<select name='unit' value='" . $item['unit'] . "'>
                    <option value='ea'>ea</option>
                    <option value='lbs'>lbs</option>
                    <option value='pcs'>pcs</option>
                    <option value='cntr'>cntr</option>
                </select>";
                echo '<button type="submit">Save</button>';
                echo '<input type="hidden" name="id" value="'.$item['id'].'">';
            echo "</div>";
        echo '</form>';
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
    
    if (isset($_GET['id']) && $item['id'] == $_GET['id']) {
    //     // Form displays for every category and does not show the item name of the item it's altering
    //     echo '<form action="scripts/update.php" method="POST">';

    //     echo "<input type='number' name='amount[]' step='.25' min='0' max='1000' value='" . $item["amount"] . "'>";
    
    //     echo "<select name='unit[]' value='" .$item['unit'] . "'>
    //     <option value='ea'>ea</option>
    //     <option value='lbs'>lbs</option>
    //     <option value='pcs'>pcs</option>
    //     <option value='cntr'>cntr</option>
    //     </select>";
    //     echo '<button type="submit">Save</button>';
    //     echo '<input type="hidden" name="id" value="'.$item['id'].'">';
    //     echo '</form>';
    }else{
        // If items category matches the current category, print all items
        if($item["category"]==$category){
            echo "<div class='item-container'>";
            echo "<p>" . $item["item_name"] . "</p>";
                echo "<div class='item-amount-cont'>";
                echo "<p>" . $item["amount"] . $item["unit"] . "</p>" ;
                    echo "<div class='btn-container'>";
                    // Update button
                    echo "<a href='../index.php?id=" . $item['id'] . "' role='button' class='update-btn'><img src='styles/icons/shopping-list.svg' alt='Update'></a>";
                    // Delete button
                    echo "<a href='scripts/delete.php?id=" . $item['id'] . "' role='button' class='delete-btn'><img src='styles/icons/trashcan.svg' alt='Delete'></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }
    
        
    }
    echo "</div>";
    $result->data_seek(0);
    
}



if(count($categories)==0){
    echo "<p>No items</p>";
    echo "<p>You should probably go shopping</p>";
}



?>

<!-- Sort by category -->
<!-- 
    If items category is the same, print items together
 -->