<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/MamillaHotel.css">
    <title>Mamilla hotel</title>
    <style>
      body
      {
          overflow-y: hidden;
          overflow-x: hidden;
      }
  </style>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1>Mamilla Hotel</h1>
    <h3 style="text-align: center; color: royalblue;">for more info please call: 02-548-2200 </h3>
    <nav role="navigation">
        <div id="menuToggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
          <ul id="menu">
            <strong><a href="../HTML/VacationTime.html"><li>Home</li></a></strong>
            <strong><a href="../HTML/RentCar.html"><li>Rent a car</li></a></strong>
            <strong><a href="../PHP/OpinionRatingOrigin.php"><li>RatingOpinion</li></a></strong>
            <strong><a href="../Video/Mamilla Hotel, Jerusalem.mp4"><li>Virtual tour</li></a></strong>
          </ul>
        </div>
      </nav>
       <form style="margin-top: 220px; margin-left: 470px; "  method="POST" action="../PHP/SaveDate.php">
        <label  style=" color: royalblue; font-size: 20px;" for="Check-in:">Check-in</label>
        <input type="date" name="Check-in">
        <label style=" color:royalblue; font-size: 20px;" for="Check-out:">Check-out</label>
        <input type="date" name="Check-out">
        <input type="submit" value="search">
        <?php
            echo "<br>"; 
            echo "<p style = 'color: royalblue; font-size: 25px;margin-left: 15px;'>The dates aren't available please try again</p><br>";
        ?>
</body>
</html>
