<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "syber";

$conn = mysqli_connect($server, $username, $password, $db_name);
$ID = $_POST['ID'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$CardNumber = $_POST['CardNumber'];
$ExpirationDate = $_POST['ExpirationDate'];
$CVC = $_POST['CVC'];
$mail = $_POST['mailo'];

$query = "SELECT * FROM transections WHERE id = '$ID' and firstname = '$FirstName'  and lastname = '$LastName' and 
cardnumber = '$CardNumber' and expirationdate = '$ExpirationDate' and cvc = '$CVC'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    header('Location:../PHP/PaymentS.php');
    $subject  = 'Receipt of the hotel';
    $message  = 'FirstName: '.$FirstName .'<br> LastName: '.$LastName.'<br> CardNumber: '
    .$CardNumber.'<br> ExpirationDate: '.$ExpirationDate.'<br> thank you for payment!';
    $headers  = 'From: [vacationtime2345]@gmail.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
mail($mail, $subject, $message, $headers);
header('Location:../PHP/PaymentS.php');
}else{
    header('Location:../PHP/PaymentError.php');
}
?>
