<?php
include "database.php";
include "functions.php";
include "constant.php";

$ip = getIPAddress();
$total_price = 0;

$cart_query = mysqli_query($connection, "SELECT * FROM `cart` WHERE ip_address = '$ip'");
while ($row = mysqli_fetch_array($cart_query)) {
    $item_id = $row['item_id'];
    $quantity = $row['quantity'];
    $select_items = mysqli_query($connection, "SELECT * FROM `items` WHERE item_id = '$item_id'");
    while ($row_item_price = mysqli_fetch_array($select_items)) {
        $item_price = $row_item_price['item_price'];
        $total_price += $item_price * $quantity;
    }
}

echo json_encode(array('total_price' => $currency . ' ' . number_format($total_price, 2)));

?>




