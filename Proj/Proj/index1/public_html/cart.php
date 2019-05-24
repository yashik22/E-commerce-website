<?php
if (isset($_SESSION['email'])) {   header('location: index.php'); } 
 session_start();
 $_SESSION_['id']= mysqli_insert_id($con);
 $show="select * from users_products INNER JOIN user ON users_products.user_id=user.user_id where user_id='$user_id'";
 $result= mysqli_query($con, $show) or die(mysqli_error($con));
 $row_check= mysqli_fetch_row($result);
 if(row_check==0){
     echo "ADD ITEMS TO CART";
 }
 else{
     
     while (true) {
         $sum=0;
         $item_price=0;
         $price=$item_price+$sum;
         $_id="select product_id from users_prodcuts where user_id='$user_id'";
         echo " ALL THE PRODUCTS IN THE CART ".$_id;
         $item_id= mysqli_fetch_row($_id);
         while(row_check>=$item_id){
            ?><p><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></p><?php 
     }
 }
 $total=$price;
 ?><p><a href='success.php'</a></p><?php
 $_GET_['id']= mysqli_insert_id($user_id);
 }
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
<?php
include 'header.php';
?>
        <div class="contianer">
            <table style="width:50%; position:absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="text" required placeholder=" "></td>
                    <td><input type="text" required placeholder=" "></td>
                    <td><input type="text" required placeholder=" "></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="text"  placeholder=" "></td>
                    <td><input type="text"  placeholder="total ="></td>
                    <td><input type="text" placeholder="Rs."></td>
                    <td><a href="success.html"><button class="btn btn-primary">Confirm Order</button></a></td>
                </tr>
            </table>
        </div>
<?php
include 'footer.php';
?>
    </body>
</html>
