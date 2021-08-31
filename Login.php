<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";
session_start();
$conn = mysqli_connect($server, $username, $password, $db_name);
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username']=$username;
$_SESSION['password']=$password;

$query = "SELECT * FROM users WHERE username = '$username' and passwordP = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    header('Location:../PHP/IsraelCountry.php');
}else{
    header('Location:../HTML/SignUpLogIn.html');
}
?>
