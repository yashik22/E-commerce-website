<?php
$_GET_id= mysqli_insert_id($con);
require 'common.php';
$insert_query="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$submit= mysqli_query($con, $insert_query);
header('location: index.php');
?>