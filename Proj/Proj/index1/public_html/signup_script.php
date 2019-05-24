<?php
require 'common.php';
if (isset($_SESSION['email'])) {   header('location: prodcuts.php'); } 
$select_query="select user_id from users where email='$email'";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row_check= mysqli_fetch_row($result);
if($row_check>0){
    die(mysqli_error($con));
    echo "email already exists";
}
else{
session_start();

$name= mysqli_real_escape_string (filter_input(INPUT_POST['name']));
$email= mysqli_real_escape_string(filter_input(INPUT_POST['email']));
$password=(filter_input(INPUT_POST['password']));
echo md5($password);
$contact=(filter_input(INPUT_POST['contact']));
$city=(filter_input(INPUT_POST['city']));
$address= mysqli_real_escape_string(filter_input(INPUT_POST['address']));
$insert_query="insert into user(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
$submit_query= mysqli_query($con, $insert_query) or die(mysqli_query($con));
$_session_['email']=$email;
$_session_['id']= mysqli_insert_id($con);
}
?>
