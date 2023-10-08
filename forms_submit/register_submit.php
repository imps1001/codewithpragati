<?php 
require '../includes/common.php';
$name = $_POST['name'];
$email = $_POST['$email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($result);
if($num_rows >0){
    echo "<script>alert('Email already exists. Please login with your account');</script>";
    header('location: ../forms/login.php');
}
else{
    $user_registration_query = "Insert into users(name, email, password) 
    values ('$name', '$email','$password')";
    $user_registration_submit = mysqli_query($con, $user_registration_query)
    or die(mysqli_error($con));
    $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result= mysqli_query($con,$query) or die(mysqli_error($con));
    $result_row= mysqli_fetch_assoc($result);
    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION['name']= $name;
    $_SESSION['id']= $result_row['ID'];
    $_SESSION["email"] = $email;
    header('location: ../dashboard.php');
}
?>