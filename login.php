<?php
  session_start();
  if ($_SESSION["email"] != null) {
    header("location:main.php");
  }
  // session_write_close();
?>

<html lang="en">
  <head>
    <title>Please login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="login_style.css">

    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit|Karla">

    <title>Login</title>
  </head>
  <body>

    <form class="form-signin" name="form1" method="post" action="perform_login.php">
      <div class="mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <div>
          <input type="checkbox" checked="checked" value="remember-me" class="txt2"> Remember me 
        </div>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="Submit" value="LOGIN" />
      <div align="right">
          NOT MEMBER? 
          <!-- <div class="Register-Link"> -->
            <a href="register.html">REGISTER</a>
          <!-- </div> -->
      </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
  </body>
</html>
