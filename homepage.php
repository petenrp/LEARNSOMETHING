<?php
  session_start();
  if ($_SESSION["email"] == null) {
    header("location:login.php");
  }
  // else {
  //     echo $_SESSION["email"];
  // }

  $connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");

  $q = "SELECT name, id FROM instructors"; 
  $r = mysqli_query($dbc, $q); 

  // while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
  //   $name   = $row['name'];
  //   $address = $row['address'];
  //   $content = $row['content'];

  //   //Create new output
  //   $output  = "<p>$name</p>";
  //   $output .= "<p>$address</p>";
  //   $output .= "<p>$content</p>";

  //   //Add output to array
  //   $mycontent[] = $output;     
  // }
  // session_write_close();
?>

<html lang="en">
  <head>
    <title>Please login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/login_style.css"> -->

    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit|Karla">

    <title>Login</title>
  </head>
  <body style="background-color:#F4F1ED">
    <nav class="navbar navbar-inverse fixed-top" style="width: 100%; height:70px; background: #191917">
      <a class="navbar-brand" href="#">
          <img src="img/weblogo.png" alt="logo" style="Height:30px;">
      </a>
    </nav>

    <?php
        echo "code running";
        echo "<table>";
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
          $name   = $row['name'];
          $address = $row['id'];
          // $content = $row['content'];
          echo "<tr><td>".$name."</td><td>".$address."</td><td>".$content."</td></tr>";
        }
        echo "</table>";
    ?>
    Welcome, you're already logged in :)

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
