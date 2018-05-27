<?php
  ini_set('display_errors', 1);
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
  $r = mysqli_query($connection, $q); 

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LEARNSOMETHING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/items.css">
    
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
  </head>

  <body style="background-color:#F4F1ED">
    <nav class="navbar navbar-fixed-top" style="width: 100%; height:70px; background: #191917">
        <div class="container">
            <a class="navbar-brand" href="http://sleepy.hackathon.ilab.sit.kmutt.ac.th" style="margin: 12px 0; height: 100%;">
                <img src="img/weblogo.png" alt="logo" style="Height:20px;">
            </a>
        </div>    
    </nav>

    <p style="font-family: 'Tajawal', sans-serif; font-weight: bold; font-size: 40px; margin: 40px 75px; padding-top: 56px">My Course</p>

    <div class="owl-carousel owl-theme">
        <div class="item">
            <img class="course-item" src="img/1.jpg"/>
            <h4>course 1</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/2.jpg"/>
            <h4>course 2</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/3.jpg"/>
            <h4>course 3</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/4.jpg"/>
            <h4>course 4</h4>
        </div>
        <div class="item ">
            <img class="course-item" src="img/5.jpg"/>
            <h4>course 5</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/6.jpg"/>
            <h4>course 6</h4>
        </div> 
        <div class="item">
            <img class="course-item" src="img/7.jpg"/>
            <h4>course 7</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/8.jpg"/>
            <h4>course 8</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/9.jpg"/>
            <h4>course 9</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/10.jpg"/>
            <h4>course 10</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/11.jpg"/>
            <h4>course 11</h4>
        </div>
        <div class="item">
            <img class="course-item" src="img/12.jpg"/>
            <h4>course 12</h4>
        </div>         
    </div>

    <div style="height: 2px; width: auto; margin-left: 5%; margin-top: 25px; margin-right: 5%; background: #191917"></div>
    <p style="font-family: 'Tajawal', sans-serif; font-weight: bold; font-size: 40px; margin: 25px 75px;">Explore</p>

    <center>
        <img class="course-item-2" src="img/1.jpg"/>
        <img class="course-item-2" src="img/2.jpg"/>
        <img class="course-item-2" src="img/3.jpg"/>
        <img class="course-item-2" src="img/4.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/5.jpg"/>
        <img class="course-item-2" src="img/6.jpg"/>
        <img class="course-item-2" src="img/7.jpg"/>
        <img class="course-item-2" src="img/8.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/9.jpg"/>
        <img class="course-item-2" src="img/10.jpg"/>
        <img class="course-item-2" src="img/11.jpg"/>
        <img class="course-item-2" src="img/12.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/1.jpg"/>
        <img class="course-item-2" src="img/2.jpg"/>
        <img class="course-item-2" src="img/3.jpg"/>
        <img class="course-item-2" src="img/4.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/5.jpg"/>
        <img class="course-item-2" src="img/6.jpg"/>
        <img class="course-item-2" src="img/7.jpg"/>
        <img class="course-item-2" src="img/8.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/9.jpg"/>
        <img class="course-item-2" src="img/10.jpg"/>
        <img class="course-item-2" src="img/11.jpg"/>
        <img class="course-item-2" src="img/12.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/1.jpg"/>
        <img class="course-item-2" src="img/2.jpg"/>
        <img class="course-item-2" src="img/3.jpg"/>
        <img class="course-item-2" src="img/4.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/5.jpg"/>
        <img class="course-item-2" src="img/6.jpg"/>
        <img class="course-item-2" src="img/7.jpg"/>
        <img class="course-item-2" src="img/8.jpg"/>
    </center>
    <center>
        <img class="course-item-2" src="img/9.jpg"/>
        <img class="course-item-2" src="img/10.jpg"/>
        <img class="course-item-2" src="img/11.jpg"/>
        <img class="course-item-2" src="img/12.jpg"/>
    </center>

    <?php
        // echo "code running";
        echo "<table>";
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
          $name   = $row['name'];
          $address = $row['id'];
          // $content = $row['content'];
          // echo "<tr><td>$name</td><td>$address</td></tr>";
          // echo "<h1>$name</h1>";
          echo "<p>$address</p>";
          echo "<br/>";
        }
        echo "</table>";
    ?>

    <footer style="background-color: #191917; padding-top: 17px; padding-bottom: 12px">
        <div style="font-family: 'Tajawal', sans-serif; font-size: 25px; text-align: center">SLEPPYTEAM CO.,Ltd.</div>
    </footer>                        
    
    <!-- <script src="jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                videoHeight: 100,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        });
    </script>
    
  </body>
</html>

<!-- <html lang="en">
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
      <a class="navbar-brand" href="http://sleepy.hackathon.ilab.sit.kmutt.ac.th" style="margin: 12px 0; height: 100%;">
          <img src="img/weblogo.png" alt="logo" style="Height:20px;">
      </a>
    </nav>

    <?php
        // echo "code running";
        echo "<table>";
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
          $name   = $row['name'];
          $address = $row['id'];
          // $content = $row['content'];
          // echo "<tr><td>$name</td><td>$address</td></tr>";
          // echo "<h1>$name</h1>";
          echo "<p>$address</p>";
          echo "<br/>";
        }
        echo "</table>";
    ?>
    Welcome, you're already logged in :)

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html> -->
