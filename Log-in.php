<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' and passwordP = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    header('Location:../HTML/IsraelCountry.html');

}else{
    header('Location:../HTML/Sign-up_Log-in.html');
}
?>
