<?php
require 'common.php';
if (!isset($_SESSION['email'])) {   header('location: index.php'); }
$new_password=(filter_input(INPUT_POST['New Password']));
$re_password=(filter_input(INPUT_POST['Re-type New Password']));
if(strlen($new_password)== strlen($re_password)){
    echo "password matched";
    $update="update set password='$password' where user_id='$user_id'";
    $result= mysqli_query($con, $update);
}
else{
    echo "Password does not match";
    header('location: settings.php');
}
$fetch="select password from user where user_id=$user_id";
$result= mysqli_query($con, $fetch);
?>