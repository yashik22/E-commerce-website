<?php


function number_of_products_purchased($con, $user_id,$item_id) {
  
include 'common.php';
if (!isset($_SESSION['email'])) {   header('location: products.php');} 
session_start();
  $users_products_query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'" ;
  $users_products_result = mysqli_query($con, $users_products_query);
  $number_of_products = mysqli_num_rows($users_products_result);
  if($number_of_products>=1){
      return $number_of_products;
  }
  else{
      return 0;
  }
  $_session_('id')=$user_id;
}
?>