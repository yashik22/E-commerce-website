<?php
require 'common.php';
if (!isset($_SESSION['email'])) {   header('location: index.php'); }
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
        <div class="container">
            <div class="row">
                <div class="panel panel-primary" style="margin-top:5%">
                    <div class="col-xs-12">
                        <div class="panel-body">
                            <form method="POST" action="settings_script.php">
                                <h2>Change Password</h2>
                                <div class="form-group ">
                                <input type="password" class="form-control" placeholder="Old Password">
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Change</button>
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
