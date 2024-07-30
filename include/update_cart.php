<?php
include "database.php";
include "functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $ip = getIPAddress();

    $update_quantity = mysqli_query($connection, "UPDATE cart SET quantity = '$quantity' WHERE ip_address = '$ip' AND item_id = '$item_id'");

    if ($update_quantity) {
        echo 'success';
    } else {
        echo 'error';
    }
}

?>