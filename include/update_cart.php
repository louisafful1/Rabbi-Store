<?php
include "database.php";
include "functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get POST data
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $ip = getIPAddress();


    // Validate and sanitize input
    $item_id = mysqli_real_escape_string($connection, $item_id);
    $quantity = mysqli_real_escape_string($connection, $quantity);

    // Update quantity in the cart table
    $query = "UPDATE cart SET quantity = '$quantity' WHERE ip_address = '$ip' AND item_id = '$item_id'";
    $update_quantity = mysqli_query($connection, $query);

    // Check for query errors
    if ($update_quantity) {
        echo 'success';
    } else {
        error_log("Database update failed: " . mysqli_error($connection));
        echo 'error';
    }
} else {
    error_log("Invalid request method");
    echo 'error';
}
?>
