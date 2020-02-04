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
$variable = 5;
for ($i = 1; $i < 6;$i++){
  echo"<div class ='container'>";
  echo"<div class ='leftcolumn'>";
  echo "<img class= 'forward' src='pictures/image".$i.".jpeg'/>";
  echo"<img onclick= 'addlike$i()' class = 'thumbup' src = 'pictures/thumbup2.png'/>";
  echo"<div id='box$i'>";
  echo"</div>";
  echo"</div>";
  echo "<div class ='rightcolumn'>";
  echo"<p>Leo Messi's footballing career started in 1995 at Newell's Old Boys, where he played until the year 2000. At the age of 13, Lionel Messi crossed the Atlantic to try his luck in Barcelona, and joined the Under 14s. Messi made spectacular progress at each of the different age levels, climbing through the ranks to Barça C, followed by Barça B and the first team in record time</p>";
  echo"</div>";
  echo"</div>";
}
 ?>
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
