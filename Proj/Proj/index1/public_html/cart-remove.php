<?php
require 'common.php';
 if (isset($_SESSION['email'])) {   header('location: cart.php'); }
 session_start();
 $_SESSION_['id']= mysqli_insert_id($user_id);
 $remove_query="Delete users_products where user_id='$user_id'";
 echo "Item Successfully removed";
 header('location: cart.php');
?>