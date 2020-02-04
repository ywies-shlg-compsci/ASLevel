<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Vote for your favorite Barcelona forward player for this season</title>
    <link rel='stylesheet' href='part1.css'/>
  </head>

  <body>
    <div class='page'>



      <div class='title' >
        <p> Vote for your favorite forward player for this season</p>
      </div>
      <div class='menus'>



             <ul id="menu">
             <li><a href="#">Home</a></li>
             <li>
                 <a href="#">About ￬</a>
             </li>
             <li>
                 <a href="#">Portfolio ￬</a>
             </li>
             <li><a href="https://www.fcbarcelona.com/en/">News</a></li>
             <li><a href="https://www.fcbarcelona.com/en/club/contact"https://www.fcbarcelona.com/en/club/contact>Contact</a></li>
            </ul>



           </div>



      <div class='sidebar'>
        <p> Ranking </p>
        <div id='rank1'> 0 </div>
        <div id='rank2'> 0 </div>
      </div>



      <div class='content'>
<?php
$mysqli = new mysqli("127.0.0.1", "hank", "123456789", "BarcelonaWebsites");
if ($mysqli->connect_errno) {
    echo "error";
    exit;
  }
$sql = "SELECT * FROM BarcelonaWebsites.Stats as t1 join BarcelonaWebsites.Player as t2 on t1.Number = t2.PlayerID join BarcelonaWebsites.Comment as t3 on t1.Number = t3.PlayerID";
if (!$result = $mysqli->query($sql)) {
  echo "error";
  exit;
}
if ($result->num_rows === 0) {
    echo "We could not find a match for ID, sorry about that. Please try again.";
    exit;

}
$i = 1;
  while ($Player = $result->fetch_assoc()) {
      echo"<div class ='container'>\n";
      echo"<div class ='leftcolumn'>\n";
      echo "<h1 class = 'heads'>".$Player['Firstname'] . ' ' . $Player['Lastname'].' '.$Player['PlayerID']."</h1>";
      echo "<img class= 'forward' src='pictures/image".$i.".jpeg'/>\n";

      echo"</div>";
      echo "<div class ='rightcolumn'>";
      echo"<div class = 'commentcontainer'>";
      echo"<p>";
      echo $Player['Comment'];
      echo"</p>";
      echo"<div class = commenter>";
      echo "<p>";
      echo "----".$Player['Commenter Name'];
      echo"</p>";
      echo"</div>";
      echo"</div>";
      echo "<div class = 'stats'>";
      echo"<p class ='heads'> Statistics\n</p>";
      echo"<p>";
      echo"Goals :".$Player['Goals']."  "."Assists :".$Player['Assists']."  "."Appearance :".$Player['Appearance'];
      echo"</p>";

      echo"</div>";
      echo"</div>";
      echo"</div>";

      $i++;
  }

 ?>
 <form action="addreview.php" method="get">
 First Name: <input type="text" name="firstname"><br>
 Last Name: <input type="text" name="lastname"><br>
 Gender: <input type="text" name="gender"><br>
 Phone: <input type="text" name="phone"><br>
 <input type="submit">
 </form>


</div>
  </body>
  <script>
      var likes1 = 0
      function addlike1() {
          likes1 = likes1 + 1
          box1.innerHTML = likes1
        }
      var likes2 = 0
      function addlike2() {
          likes2 = likes2 + 1
          box2.innerHTML = likes2
        }
      var likes3 = 0
      function addlike3() {
          likes3 = likes3 + 1
          box3.innerHTML = likes3
        }
      var likes4 = 0
      function addlike4() {
          likes4 = likes4 + 1
          box4.innerHTML = likes4
        }
      var likes5 = 0
      function addlike5() {
          likes5 = likes5 + 1
          box5.innerHTML = likes5
        }
  </script>


</html>
