<html>
<header>
<link rel='stylesheet' href='styles.css'/>
</header>
<body>

  <?php
  if (isset($_GET['firstname']) ) {
      $firstname = $_GET['firstname'];
      $firstname = "";
  }
  if (isset($_GET['lastname']) ) {
      $lastname = $_GET['lastname'];
  } else {
      $lastname = "";
  }

  if (isset($_GET['phone']) ) {
      $phone= $_GET['phone'];
  } else {
      $phone= "";
  }
  if (isset($_GET['gender']) ) {
      $gender= $_GET['gender'];
  } else {
      $gender= "";
  }

  if (($phone  == "") || ($gender == "") || ($firstname == "") || ($lastname == ""))
  {

      echo "Error - missing a parameter";
      echo "firstname: " . $firstname;
      echo "lastname: " . $lastname;
      echo "gender: " . $gender;
      echo "phone: " . $phone;

  }
  else
  {
  $mysqli = new mysqli('127.0.0.1', 'hank', '123456789', 'Test1');

  // Oh no! A connect_errno exists so the connection attempt failed!
  if ($mysqli->connect_errno) {
      // The connection failed. What do you want to do?
      echo "Error: Failed to make a MySQL connection, here is why: \n";
      echo "Errno: " . $mysqli->connect_errno . "\n";
      echo "Error: " . $mysqli->connect_error . "\n";
      exit;
  }

    $sql = "SELECT MAX(id) as maxid FROM Test1.students ";
    if (!$result = $mysqli->query($sql)) {
      echo "Sorry, the website is experiencing problems.";
      echo "Query: " . $sql . "\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error . "\n";
      exit;
    }
    $data= $result->fetch_assoc();
    #echo "Hi". $data["maxid"];
    $nextID = $data["maxid"] + 1;
    #echo "Hi". $nextID;

    $sql = "INSERT INTO Test1.students (ID, FIRSTNAME, GENDER, LASTNAME, PHONE) VALUES ('$nextID', '$firstname', '$gender', '$lastname', '$phone')";

    echo $sql;
      if (!$result = $mysqli->query($sql)) {
        echo "Sorry, the website is experiencing problems.";
        echo "Query: " . $sql . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
      }

 }

  ?>
<a href='http://localhost/ASlevel/databaseintrosimple00.php'> Return to home page </a>

</body>
</html>
