<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);

$mail = $_POST['Email'];
$respons = $_POST['respons'];

    $subject  = 'Answer sent ';
    $headers  = 'From: [vacationtime2345]@gmail.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
    mail($mail, $subject, $respons, $headers);

    $SQL = "DELETE FROM messages WHERE Email = '".$mail."';";
    if(mysqli_query($conn,$SQL))
    {
        header('Location:../PHP/AplicationsT.php');
    }
    else
    {
        header('Location:../PHP/Applications.php');
    }
    mysqli_close($conn);
?>
