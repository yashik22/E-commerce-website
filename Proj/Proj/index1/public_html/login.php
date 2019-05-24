<?php
require './includes/common.php';
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
?>
        <div class="container">
            <div class="row">
                <div class="panel panel-primary" style="margin-top:23%">
                    <div class="col-xs-12">
                        <div class="panel-body">
                        <P class="text-warning">Login to make a purchase</P>
                        <form method="post" action="login_submit.php">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
        <div class="form-group ">
            <label for="email">e-mail</label>
                <input type="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">password</label>
                <input type="password" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                            </form>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? Register</p>
                    </div>
                </div>
            </div>
        </div>
<?php
include 'footer.php';
?>
    </body>
</html>