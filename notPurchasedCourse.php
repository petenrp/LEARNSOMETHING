<?php
    // DEBUG
    ini_set('display_errors', 1);

    session_start();
    
    // 
    // REDIRECT IF NOT LOGGED IN
    // 
    if ($_SESSION["email"] == null) {
        header("location:login.php");
    }
    // 
    // REDIRECT IF PURCHASED
    // 
    $connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");
    
    $course_id = $_GET['id'];
    $user_id = $_SESSION['email'];

    $strSQL = "SELECT * FROM purchase WHERE course_id = '$course_id' and user_id = '$user_id'";

    $objQuery = mysqli_query($connection, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
    
	if($objResult) {
        header("location:PurchasedCourse.php?id=$course_id");
    }
?>
<html >
<head>
    <link rel="stylesheet" href="css/Course_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/items.css">
    
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

    <style>
        .checked {
            color: orange;
        }
    </style>
</head>
<body style="background-color: #F4F1ED">
    <nav class="navbar navbar-fixed-top" style="width: 100%; height:70px; background: #191917">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="img/weblogo.png" alt="logo" style="Height:30px;">
                    </a>
                </div>    
    </nav>

    <div class="mainPage">
    <br>   
    <iframe id="ytplayer" type="text/html" width="100%" height="50%"
  src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com"
  frameborder="0"></iframe>
        <div style="margin: 30px 30px">
            <h3 class="font">Course Title</h3>
            <div class="indent50 font"><b>description:</b> bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~ bla bla bla~~~</div>
            <br>
            <div class="indent50 font"><b>by:_______</b>
            <button class="button" style="float: right">Buy</button>
            </div>
            <!-- <button class="button" style="float: right">Buy</button> -->
            <br><br>
            <hr>

            <h3 class="font">Review</h3>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>

            
        </div>

        <br>
    </div>
    </body>
</html>