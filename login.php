<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'header.php'; ?>
    <link rel="stylesheet" href="lib/css/forms.css">
    <title>Inkspace</title>
</head>
<body>
    
  <p class="sign-up-page-header text-center"> Log In </p>
  <p class="text-center">
      Enter your login credentials
      <br>
      to get access to your account.
  </p>


  <div class="row">
    <form action="php/loginScript.php" method="post" enctype="" class="col-9 col-md-6 col-lg-3">
      <!--This is the login page.-->
      <div>
          <label for="name">Name</label>
          <br>
          <input class="form-control" name="name" type="text" id="name" placeholder="name" required>
      </div>

      <div>
          <label for="user_password">Passphrase</label>
          <br>
          <input class="form-control" name="password" type="password" id="user_password" placeholder="Password" required>
      </div>

      <div>
          <input id="form-submit-btn"  class="btn btn-block" name="submit" type="submit" value="Submit">
      </div>

      <hr>

      <p class="text-center">
        Haven't got an account?
                <br>
        <a href="signup.php">Sign up</a>
      </p>

      <hr>

      <p class="text-center">
        Reset Password with <a href="password_reset_with_sms.php">SMS</a> or <a href="password_reset_with_email.php">Email</a>.
      </p>

    </form>
  </div>
</body>
</html>