<?php 
require '../includes/common.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query1= "SELECT * FROM users
         WHERE email = '$email' AND password = '$password'";
$query1_result= mysqli_query($con,$query1) or die(mysqli_error($con));
$result1= mysqli_num_rows($query1_result);
$result_row1= mysqli_fetch_assoc($query1_result);
if($result1!=0){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $_SESSION["id"]=$result_row1['ID'];
    $_SESSION["name"]= $result_row1['name'];
    $_SESSION["email"] = $email;
    header('location: ../dashboard.php');

}
?>