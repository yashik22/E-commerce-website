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
        <nav class=" navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul> 
                        <?php
                         if (!isset($_SESSION['email']))
                        {
                        ?>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                        <?php
                        }
                         else 
                        {
                        ?>
                         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                         <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                         <?php
                        }
                        ?> 
                        </ul>   
                    </div>
                </div>
            </div>
        </nav>
    </body>
</html>
