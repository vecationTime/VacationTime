<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($password) < 8)
{
    header('Location:../HTML/UpdatePassword.html');
    exit();
}

$hashed=password_hash($password, PASSWORD_DEFAULT);

$query = "UPDATE users SET passwordP = '$hashed' WHERE username = '$username'";

if(mysqli_query($conn, $query))
{
    header('Location:../HTML/SignUpLogIn.html');
}
else
{
    header('Location:../HTML/UpdatePassword.html');
}
?>
