<?php
require 'common.php';
if (isset($_SESSION['email'])) {   header('location: index.php'); } 
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
include 'Check_if_added.php';
?>
        <div class="jumbotron" style="margin-left: 12.5%; margin-right: 12.5%; margin-top:2%">
            <center>
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
            </center>    
        </div>
        <div class="container">
            <div class="row">
                <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="cameras/camera1.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>Canon EOS</h3>
                                <p>Price:Rs.36000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                        <button class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="cameras/camera2.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>Sony DSLR</h3>
                                <p>Price:Rs.40000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="cameras/camera3.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>Sony DSLR</h3>
                                <p>Price:Rs.50000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>    
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="cameras/camera4.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>Olympus DSLR</h3>
                                <p>Price:Rs.80000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>    
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="shirts/shirt0.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>H&W</h3>
                                <p>Price:Rs.800.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>    
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="shirts/shirt1.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>Luis Phil</h3>
                                <p>Price:Rs.1000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>    
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="shirts/shirt2.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>John Zok</h3>
                                <p>Price:Rs.1500.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>    
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="shirts/shirt3.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>
                                <h3>Jhalsani</h3>
                                <p>Price:Rs.1300.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>    
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>    
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="watches/watch0.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>    
                                <h3>Titan Model #301</h3>
                                <p>Price:Rs.13000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="watches/watch1.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>    
                                <h3>Titan Model #201</h3>
                                <p>Price:Rs.3000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="watches/watch2.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>    
                                <h3>HMT Milan</h3>
                                <p>Price:Rs.8000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>
                    <div class="classes col-md-3 col-sm-6">    
                    <div class="thumbnails">
                    <a href="#"><img src="watches/watch3.jpg" class="img-responsive" alt="Responsive image">
                        <div class="caption">
                            <center>    
                                <h3>Faber Luba #111</h3>
                                <p>Price:Rs.18000.00</p>
                                <?php if (!isset($_SESSION['email'])) 
                                    { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                    
                                    } 
                                    else{
                                    if (check_if_added_to_cart(1)) {echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                    else {?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                    }
                                    }
                                    ?>
                            </center>
                        </div>
                    </a>
                    <button class="btn btn-primary btn-block">Add to cart</button>    
                    </div>
                    </div>    
            </div>
        </div>
<?php
include 'footer.php';
?>
    </body>
</html>
