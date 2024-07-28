<?php
$connection = mysqli_connect("localhost", "root", "", "rabbistore");

if (!$connection){
    die(mysqli_error($connection));
}
?>