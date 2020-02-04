<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Player Profile</title>
    <link rel='stylesheet' href='player.css'/>
  </head>

  <body>
    <?php
    if (isset($_GET['PlayerID']) && is_numeric($_GET['PlayerID'])) {
        $PlayerID = (int) $_GET['PlayerID'];
    } else {
        $PlayerID = 1;
    }
    $mysqli = new mysqli("127.0.0.1", "hank", "123456789", "BarcelonaWebsites");
    if ($mysqli->connect_errno) {
        echo "error";
        exit;
      }
    if (isset($_GET['Flag'])) {
        $Flag = 1;
    }else {
        $course = 0;
    }

    if ($flag == 1) {
      $sql = "SELECT * FROM BarcelonaWebsites.Stats as t1 join BarcelonaWebsites.Player as t2 on t1.Number = t2.PlayerID join BarcelonaWebsites.Comment as t3 on t1.Number = t3.PlayerID";
      if (!$result = $mysqli->query($sql)) {
        echo "error";
        exit;
      }
      if ($result->num_rows === 0) {
          echo "We could not find a match for ID $PlayerID, sorry about that. Please try again.";
          exit;
      }
      while ($Player = $result->fetch_assoc()) {
        echo "<p>";
        echo $Player['Firstname']." - " . $Player['Lastname'];
        echo "</p>";
        echo"";
      }



      }
