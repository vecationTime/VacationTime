<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rating&Opinion Form</title>
    <link rel="stylesheet" a href="../CSS/OpinionRating.css">  </head>
  <body>
<div class="a">
      <form method="POST" action="../PHP/OpinionRating.php">
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
        </div>
        <?php
        $conn=mysqli_connect("localhost","root","","syber");
        $sql = "SELECT * FROM Opinion;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo "<br>";
        if($resultCheck>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<p style = 'color: white; text-align: center; font-size: 25px';>".$row['rating']."-".$row['opinion'];
                echo "<br>";
            }
        }
        ?>
<section></section>
<script >
          const colors = [
            '#2196f3',
            '#e91e63',
            '#ffeb3b',
            '#74ff1d'
          ]
        function createSquare(){
          const section = document.querySelector('section');
          const square = document.createElement('span');
          var size = Math.random() * 50;
          square.style.width = 20 + size + 'px';
          square.style.height = 20 + size + 'px';
          square.style.top = Math.random() * innerHeight + 'px';
          square.style.left = Math.random() * innerWidth + 'px';
          const bg = colors[Math.floor(Math.random() * colors.length)];
          square.style.background = bg;
          section.appendChild(square);
          setTimeout(() => {
            square.remove()
          }, 5000)
        }
        setInterval(createSquare, 150)
          </script>
  </body>
</html>
