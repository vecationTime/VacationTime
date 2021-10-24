<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IsraelCountry</title>
    <link rel="stylesheet" a href="../CSS/IsraelCountry.css">
     <style>
        body{ overflow-y: hidden; overflow-x: hidden; }
    </style>
    <script
   src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href="../HTML/VacationTime.html"><button class="btn"><i class="fa fa-home"></i></button></a>
    <h1>Click on Israel</h1>
    <div class="container">
        <a href="../HTML/IsraelCities.html"><button class="btn-1">Israel</button></a>
    </div>
   <?php
        session_start();
        echo "<img src='../IMG/profile.jpeg' style='height: 50px; wight:15px; position:relative; 
        top: -830px; left: 1250px;'/>";
        echo "<p style = 'color: white; text-align: center; position: relative; 
        top: -900px; left: 620px; font-size: 25px'> ".$_SESSION['username']."</p><br>";
    ?>
</body>
</html>
