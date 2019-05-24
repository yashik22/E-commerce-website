<?php
if (isset($_SESSION['email'])) {   header('location: prodcuts.php'); } 
$select_query="select user_id,eamil from users where email='$email' and password='$password'";
$result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row_check= mysqli_fetch_row($result);
if($row_check==0){
    echo "There is no user with this email/password";
}
else{
$row_check=mysqli_fetch_array($result);
}
$email= mysqli_real_escape_string(filter_input(INPUT_POST['email']));
$password=(filter_input(INPUT_POST['password']));
echo md5($password);
?>

