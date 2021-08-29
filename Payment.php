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

$query = "SELECT * FROM Transactions WHERE id = '$ID' and firstname = '$FirstName'  and lastname = '$LastName' and 
cardnumber = '$CardNumber' and expirationdate = '$ExpirationDate' and cvc = '$CVC'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1){
    header('Location:../PHP/PaymentS.php');

}else{
    header('Location:../PHP/PaymentError.php');
}
?>
