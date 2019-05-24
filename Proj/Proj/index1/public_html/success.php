<?php
if (isset($_SESSION['email'])) {   header('location: home.php'); }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="alert">
                <h1> Your order is confirmed. Thank you for shopping with us.<a href="products.php" style=" text-decoration: underline; color: blue">Click here</a> to purchase any other item.</h1>
            </div>
        </div>
    </body>
</html>
<?php
function number_of_products_purchased($con, $product_id,$user_id) {
  $users_products_query = "SELECT  product_id FROM users_products WHERE product_id = '$product_id'";
  $users_products_result = mysqli_query($con, $users_products_query);
  $number_of_products = mysqli_num_rows($users_products_result);
  $status_confirmed="SELECT * FROM users_products WHERE product_id='$product_id' AND user_id ='$user_id' and status='Added to cart";
  return $number_of_products. $status_confirmed;
}
?>