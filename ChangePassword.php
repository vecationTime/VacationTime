<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);
$mail = $_POST['mail'];

$query = "SELECT * FROM users WHERE Mail = '$mail'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    header('Location:../HTML/UpdatePassword.html');

}else{
    header('Location:../HTML/Sign-up_Log-in.html');
}
?>
