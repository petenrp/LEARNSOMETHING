<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LEARNSOMETHING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
  </head>

  <body style="background-color:#F4F1ED">
    <nav class="navbar navbar-inverse fixed-top" style="width: 100%; height:70px; background: #191917">
      <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="logo" style="Height:30px;">
      </a>
    </nav>

    <p style="font-family: 'Tajawal', sans-serif; font-weight: bold; font-size: 40px; margin: 40px 75px;">My Course</p>

    <?php $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
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
  })?>

    <div class="owl-carousel owl-theme">
    <div class="img/1.jpeg"><h4>1</h4></div>
    <div class="img/2.jpeg"><h4>2</h4></div>
    <div class="img/3.jpeg"><h4>3</h4></div>
    <div class="img/4.jpg"><h4>4</h4></div>
    <div class="img/5.jpg"><h4>5</h4></div>
    <div class="img/6.jpg"><h4>6</h4></div>
    <div class="img/7.jpeg"><h4>7</h4></div>
    <div class="img/8.jpg"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
    </div>

    <div style="height: 2px; width: auto; margin-left: 5%; margin-top: 25px; margin-right: 5%; background: #191917"></div>
    <p style="font-family: 'Tajawal', sans-serif; font-weight: bold; font-size: 40px; margin: 25px 75px;">Explore</p>

  </body>
</html>


