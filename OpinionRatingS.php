<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form | CodingNepal</title>
  </head>
  <body>
      <form method="POST" action="../PHP/OpinionRaiting.php">
        <input type="radio" name="rating" value="1">1
        <input type="radio" name="rating" value="2">2
        <input type="radio" name="rating" value="3">3
        <input type="radio" name="rating" value="4">4
        <input type="radio" name="rating" value="5">5
          <div class="textarea">
            <textarea name="opinion" cols="30" placeholder="Describe your experience.."></textarea>
          </div>
        <input type="submit" value="post">
        </form>
        
        <?php
        
        echo "Thanks for rating us!";
        
        $conn=mysqli_connect("localhost","root","","syber");
        $sql = "SELECT * FROM Opinion;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo "<br>";
        echo "<hr>";
        if($resultCheck>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<p style = 'color: blue; border: 1px solid red; text-align: center; font-size: 35px'>" .$row['rating']."-".$row['opinion']."</p><img src = '../IMG/hotel.jpg'/><br>";
                echo "<br>";
                echo "<hr>";
            }
        }
        
        ?>
  </body>
</html>
