<?php
include 'config.php';

$sql = "SELECT * FROM list";
$result = $conn->query($sql);

if($result->fetch_assoc()){
    echo "<thead>";
        echo "<tr>";
            echo "<th scope='col'>Item</th>";
            echo "<th scope='col'>Amount</th>";
            echo "<th scope='col'>Est. Cost</th>";
            echo " <th scope='col'>Update</th>";
        echo "</tr>";
    echo "</thead>";
}else{
    echo "<p>No items</p>";
}
$result->data_seek(0);

while($item = $result->fetch_assoc()){
    if (isset($_GET['id']) && $item['id'] == $_GET['id']) {
            echo '<form action="/scripts/update-list.php" method="POST">';   
                /*Item name input */
                echo "<td>";
                        echo "<input type='text' name='list-item' value='" . $item["item_name"] . "'>";
                echo "</td>";
                /*Item amount input */
                echo "<td>";
                        echo "<input type='number' name='list-amount' step='1' min='1' max='100' value='" . $item["amount"] . "'>";
                echo "</td>";
                    /*Item cost input */
                echo "<td>";
                    echo "<input type='number' name='list-cost' step='.01' min='.01' max='1000' value='" . $item["cost"] . "'>";
                echo "</td>";
                echo "<td>";
                /*Save button */
                    echo '<button type="submit" class="btn-fill btn">Save</button>';
                    echo '<input type="hidden" name="id" value="'.$item['id'].'">';
                echo "</td>";  
            echo '</form>';
    }else{
            echo "<tr>";
                echo "<td>" . $item["item_name"] . "</td>";
                echo "<td class='item-amounts'>" . $item["amount"] . "</td>";
                echo "<td class='item-cost'>" . $item["cost"] . "</td>";
                echo "<td>";
                    echo "<div class='list-btn-container'>";
                    // Update button
                        echo "<a href='list.php?id=" . $item['id'] . "' role='button' class='update-btn'><img src='/styles/icons/shopping-list.svg' alt='Update'></a>";
                    // Delete button
                        echo "<a href='/scripts/delete-list.php?id=" . $item['id'] . "' role='button' class='delete-btn'><img src='/styles/icons/trashcan.svg' alt='Delete'></a>";
                echo "</div>"; 
                    echo "</td>";
            echo "</tr>";  
    }    

}


$conn->close();
?>