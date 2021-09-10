<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";
$conn = mysqli_connect($server, $username, $password, $db_name);
$mail = $_POST['mail'];
$query = "SELECT * FROM users WHERE mail = '$mail'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    header('Location:../HTML/UpdatePassword.html');
}else{
    header('Location:../HTML/SignUpLogIn.html');
}
?>
