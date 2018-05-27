<?php
    ini_set('display_errors', 1);
    session_start();

    if ($_SESSION["email"] == null) {
      header("location:login.php");
    }
    // else {
    //     echo $_SESSION["email"];
    // }

    // 
    // CONNECTION
    // 
    $connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");
    
    // $course_id = $_GET['id'];
    $user_id = $_SESSION['email'];

    $strSQL = "SELECT * FROM purchase WHERE user_id = '$user_id'";
    
    // echo $strSQL;

    $objQuery = mysqli_query($connection, $strSQL);
    // $objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
    
    // if(!$objResult)
    // {
    //     echo "Not purchased";
    //     header("location:notPurchasedCourse.php?id=$course_id");
    // }
    // else
    // {
    //     echo "purchased, enjoy :)";
    //     // $_SESSION["first_name"] = $objResult["first_name"];
    //     // $_SESSION["last_name"] = $objResult["last_name"];
    //     // $_SESSION["email"] = $objResult["email"];
    //     // $_SESSION["password"] = $objResult["password"];

    //     // session_write_close();
        
    //     header("location:PurchasedCourse.php?id=$course_id");
    // }
    // mysqli_close($connection);
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
        <?php
            // echo "code running";
            while ($row = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
              echo "<div class='item'>";
              $course_id = $row['course_id'];

              //
              // FETCH COURSE DATA
              //
              $strSQL = "SELECT * FROM courses WHERE id = '$course_id'";
              $courseQuery = mysqli_query($connection, $strSQL);
              $courseResult = mysqli_fetch_array($courseQuery, MYSQLI_BOTH);

              if(!$courseResult) {
                  // ERROR
                  echo "error fetching courses\n";
              }
              else {
                  $title = $courseResult["title"];
                  $description = $courseResult["description"];
                  $instructor_id = $courseResult["instructor_id"];

                  //
                  // FETCH INSTRUCTOR
                  //
                  $strSQL = "SELECT * FROM instructors WHERE id = '$instructor_id'";
                  $instructorQuery = mysqli_query($connection, $strSQL);
                  $instructorResult = mysqli_fetch_array($instructorQuery, MYSQLI_BOTH);

                  if(!$instructorResult) {
                    // ERROR
                    echo "error fetching instructor\n";
                  }
                  else {
                      $instructor_name = $instructorResult["name"];
                  }
              }
              echo "<a href='view_course.php?id=$course_id'>";
              echo "<img style='height: 200px' src='img/1.jpg'/>";
              echo "<h3 class='font' style='font-weight: bold'>$title</h3>";
              echo "<h5>BY ".strtoupper($instructor_name)."</h5>";
              // echo "<p>$description</p>";
              echo "</a>";
              echo "</div>";
            }
        ?>
        <!-- <div class="item">
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
        </div>          -->
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