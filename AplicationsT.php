<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Application Board</title>
    <link rel="stylesheet" href="../CSS/OpinionRating.css">
    <link rel="stylesheet" a href="../CSS/Login.css"/>
    <style>
        body
        {
            overflow-y: scroll;
        }
        #b
        {
                color:white;
                text-align:center;
                border: 2px solid white;
        }
        .btn {
        position: relative;
        left: 675px;
        top: -300px;
      width: 170px;
      height: 69px;
      border: none;
      outline: none;
      border-radius: 48px;
  cursor: pointer;
  background-color: #20dbc2;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  transition: all 0.5s;
  padding: 5px 5px 5px 5px;
}
.btn:hover {
  background-color: #00bfa6;
}
#d
{
  position: relative;
  left: 3px;
}
#a
        {
          width: 200px;
          height: 50px;
          font-size:17px;
        }
        #c
        {
          width: 200px;
          height: 50px;
          font-size:17px;
        }
    </style>  
  </head>
  <body>
<div class="a">
    <h1 id="b">Handling Application</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
      <form method="POST" action="../PHP/SendRespons.php">
                  <input id = "a" name="Email" style="color: #20dbc2" type="Email" placeholder="Enter email">
                  <span style="color: crimson">Email</span>
          <div class="textarea">
            <input id = "c" name="respons" cols="30" placeholder="Answer Customers">
          </div>
        <input id="d" type="submit" value="Answer">
        
        <?php
         echo "<p style = 'color: aqua; text-align: center; position: relative; 
         top: 50px; left: 10px; font-size: 25px'>Respons sent to the customer.</p><br>";
         echo "<br>";
        ?>
        </form>
        </div>
        <a href="../HTML/Home.html"><input class="btn solid" type="submit" value="GO Back"></a>
        <?php
        $conn=mysqli_connect("localhost","root","","syber");

        $sql = "SELECT * FROM messages;";

        $result = mysqli_query($conn, $sql);

        $resultCheck = mysqli_num_rows($result);

        echo "<br>";
        if($resultCheck>0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            echo "<p style = 'color: white; text-align: center; font-size: 25px';>"."FullName: ".$row['FullName']." - Email: ".$row['Email']." - UserMessages: ".$row['UserMessages'];
            echo "<br>";
            echo "<br>";
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
