<?php
include '_dbconnect.php';

// Handle Create Item
if (isset($_POST['createItem'])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $sql = "INSERT INTO `items` (item_name, item_description, item_price, item_image) VALUES ('$name', '$description', '$price', '$image')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<p class="h4"><script>alert("Item added successfully!")</script></p>';
		echo "<script>window.open('../index.php','_self')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Handle Update Item
if (isset($_POST['updateItem'])) {
    $currentItemId = $_POST["currentItemId"]; 
    $newItemId = $_POST["itemId"]; 
    $name = $_POST["name"];
    $description = $_POST["desc"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    // Update database entry based on current item_id
    $sql = "UPDATE `items` SET item_id='$newItemId', item_name='$name', item_description='$description', item_price='$price', item_image='$image' WHERE item_id='$currentItemId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<p class="h4"><script>alert("Item updated successfully!")</script></p>';
        echo "<script>window.open('../index.php','_self')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}



// Handle Remove Item
if (isset($_POST['removeItem'])) {
    $itemId = $_POST["itemId"];

    $sql = "DELETE FROM `items` WHERE item_id='$itemId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<p class="h4"><script>alert("Item removed successfully!")</script></p>';
		echo "<script>window.open('../index.php','_self')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
