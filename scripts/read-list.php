<?php
include 'config.php';

$sql = "SELECT * FROM list";
$result = $conn->query($sql);
// For each row in table, dynamically generate the below HTML
while($item = $result->fetch_assoc()){
    if (isset($_GET['id']) && $item['id'] == $_GET['id']) {

        // echo "<div class='overlay-edit active'></div>";
        // echo "<div class='container list-edit'>";
        //     echo "<svg class='list-edit-close' xmlns='http://www.w3.org/2000/svg' width='15.556' height='15.556' viewBox='0 0 15.556 15.556'>";
        //         echo "<path fill='#000000' d='M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z' transform='translate(-0.222 -0.222)' fill-rule='evenodd'/>";
        //     echo "</svg>";

            echo '<form action="scripts/update-list.php" method="POST" class="update-form-container">'; 
                echo "<div class='li-items-cont'>";
                    echo "<div class='li-item-cont'>";   
                        /*Item name input */
                        echo "<div class='inputs'>";
                                echo "<input type='text' name='list-item' value='" . $item["item_name"] . "'>";
                        echo "</div>";
                        /*Item amount input */
                        echo "<div class='inputs'>";
                                echo "<input type='number' name='list-amount' step='1' min='1' max='100' value='" . $item["amount"] . "'>";
                        echo "</div>";
                         /*Item cost input */
                        echo "<div class='inputs'>";
                            echo "<input type='number' name='list-cost' step='.01' min='.01' max='1000' value='" . $item["cost"] . "'>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

                echo "<svg class='list-edit-close' xmlns='http://www.w3.org/2000/svg' width='15.556' height='15.556' viewBox='0 0 15.556 15.556'>";
                        echo "<path fill='#000000' d='M14.364.222l1.414,1.414L9.414,8l6.364,6.364-1.414,1.414L8,9.414,1.636,15.778.222,14.364,6.586,8,.222,1.636,1.636.222,8,6.586Z' transform='translate(-0.222 -0.222)' fill-rule='evenodd'/>";
                    echo "</svg>";

            /*Save button */
            echo "<div class='btn-container'>";
                echo '<button type="submit" class="btn-fill-green btn">Save</button>';
            echo "</div>";
                echo '<input type="hidden" name="id" value="'.$item['id'].'">';
            
        echo '</form>';
    // echo "</div>";


    }    
        echo "<div class='item-container'>";
            echo "<p class='item-name'>" . $item["item_name"] . "</p>";
                echo "<div class='item-amount-cont'>";
                echo "<p>" . $item["amount"] . $item["cost"] . "</p>" ;
                    echo "<div class='btn-container'>";
                    // Update button
                    echo "<a href='../index.php?id=" . $item['id'] . "' role='button' class='update-btn'><img src='styles/icons/shopping-list.svg' alt='Update'></a>";
                    // Delete button
                    echo "<a href='scripts/delete-list.php?id=" . $item['id'] . "' role='button' class='delete-btn'><img src='styles/icons/trashcan.svg' alt='Delete'></a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
}
$conn->close();
?>