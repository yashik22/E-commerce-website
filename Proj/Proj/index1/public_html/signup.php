<?php
require 'common.php';
if (!isset($_SESSION['email'])) {   header('location: products.php'); } 
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
        <div class="container">
            <div class="row">
                <div class="panel panel-default" style="border:none;">
                    <div class="col-xs-12">
                        <div class="panel-body">
                            <form method="post" action="signup_script.php">
                                <div class="form-group">
                                    <h2>SIGN UP</h2>   
                                <input type="name" class="form-control " placeholder="Name">
                                </div>
                                <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include 'footer.php';
?>
    </body>
</html>
