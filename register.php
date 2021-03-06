<html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_style.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

    <title>Login</title>
  </head>
  <body style="font-family: Tajawal, sans-serif;">
    <!-- <img src="img/weblogo.png" alt="logo" style="Height:20px;"> -->
    <form class="form-signin" name="Register_Form" method="post" action="perform_register.php" onsubmit="return validateForm()">
      <div class="mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
      </div>

      <div class="form-label-group">
        <input id="inputFirstname" name="inputFirstname" class="form-control" placeholder="Firstname" required autofocus>
        <label for="inputFirstname">Firstname</label>
      </div>

      <div class="form-label-group">
        <input id="inputLastname" name="inputLastname" class="form-control" placeholder="Lastname" required>
        <label for="inputLastname">Lastname</label>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required>
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputConfirmPassword" name="inputConfirmPassword" class="form-control" placeholder="ConfirmPassword" required>
        <label for="inputConfirmPassword">Confirm Password</label>
      </div>

      <input class="btn btn-lg btn-warning btn-block" type="submit" name="Submit" value="Submit" />

    <!-- <input type="submit" value="Submit"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
          var password = document.getElementById("inputPassword");
          var confirm_password = document.getElementById("inputConfirmPassword");

          function validateForm() {
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Doesn't Match");
              return false;
            } else {
              // confirm_password.setCustomValidity('');
              return true;
            }
          }

          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;
      })();
    </script>
</body>

</html>