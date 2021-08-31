<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Israel</title>
    <link rel="stylesheet" a href="../CSS/IsraelCountry.css">
    <style>
        body
        {
            overflow-y: hidden;
            overflow-x: hidden;
        }
    </style>
    <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  ></script>
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
    echo "<img  id= 'profile' src='../IMG/profile.jpg' style = 'height: 50px; width: 50px; position: relative; 
    top: -1012px; left: 1590px;'/>";
    echo "<p style = 'color: white; text-align: center; position: relative; 
    top: -1100px; left: 800px; font-size: 35px'>".$_SESSION['username']."</p><br>";
    ?>

<script>
    var image=document.getElementById("profile");
    image.addEventListener("mouseover", function(){
    var container=document.createElement("div");
    container.innerHTML="Ori";
    container.style.color= "white"
    container.style.border="1px solid white";
    document.body.appendChild(container);    
    });
</script>

</body>
</html>
