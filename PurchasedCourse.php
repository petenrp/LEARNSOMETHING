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
    
	if(!$objResult) {
        header("location:notPurchasedCourse.php?id=$course_id");
    }

    //
    // QUERY course data
    //
    $strSQL = "SELECT * FROM courses WHERE id = '$course_id'";

    $objQuery = mysqli_query($connection, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);

    if(!$objResult) {
        // ERROR: just redirect to the index page
        header("location:index.php");
    }
    else {
        $title = $objResult["title"];
        $description = $objResult["description"];
        $instructor_id = $objResult["instructor_id"];
    }

    //
    // QUERY instructor data
    //
    $strSQL = "SELECT * FROM instructors WHERE id = '$instructor_id'";

    $objQuery = mysqli_query($connection, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);

    if(!$objResult) {
        // ERROR: just redirect to the index page
        header("location:index.php");
    }
    else {
        $instructor_name = $objResult["name"];
    }
?>

<html>

<head>
    <link rel="stylesheet" href="css/Course_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/items.css">
    
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
</head>
<body style="background-color: #F4F1ED">
    
    <nav class="navbar navbar-fixed-top" style="width: 100%; height:70px; background: #191917">
        <div class="container">
            <a class="navbar-brand" href="http://sleepy.hackathon.ilab.sit.kmutt.ac.th" style="margin: 12px 0; height: 100%;">
                <img src="img/weblogo.png" alt="logo" style="Height:20px;">
            </a>
        </div>    
    </nav>    

    <div class="mainPage" style="padding-top: 20px">
        <iframe id="ytplayer" type="text/html" width="100%" height="50%"
            src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com"
            frameborder="0"></iframe>
        <div style="margin: 30px 30px">
            <h1 class="font">
                <?php echo $title ?>
            </h1>
            <h4 class="font">
                BY &#9;<b><?php echo strtoupper($instructor_name) ?></b>
                <br>
                <p style="background: #ebebeb; color: #424242; width: fit-content; padding: 2 8px; margin-top: 12px; float: right">
                    PURCHASED
                </p>
            </h4>
            <br>
            <br>
            <br>
            <div class="indent50 font" style="font-size: 18px">
                <!--<b>description:</b>-->
                <?php echo $description ?>
            </div>

            <br>
            <br>

            <hr>
            <h3 class="font">Workshop-Schedule</h3>
                <a>(URL HERE)</a>
            <hr>
            
            <br>

            <h3 class="font">Lessons</h3>
            <div class="h3_font_size indent30 font">
                <h4>
                    Lesson 1: bla bla bla bla
                </h4>
                <a href href="video_page.php" class="button" style="float: right">PLAY</a>
            </div>
            <br><hr><br>

            <div class="h3_font_size indent30 font">
                <h4>
                    Lesson 2: bla bla bla bla
                </h4>
                <button class="button" style="float: right">PLAY</button>
                <a href href="video_page.php" class="button" style="float: right">PLAY</a>
            </div>
            <br><hr><br>

            <div class="h3_font_size indent30 font">
                <h4>
                    Lesson 3: bla bla bla bla
                </h4>
                <button class="button" style="float: right">PLAY</button>
                <a href href="video_page.php" class="button" style="float: right">PLAY</a>
            </div>
            <br><hr><br>

        </div>
    </div>    
</body>

</html>