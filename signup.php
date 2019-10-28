<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'header.php'; ?>
    <link rel="stylesheet" href="lib/css/forms.css">
    <title>SignUp</title>
</head>
<body>
<p class="sign-up-page-header text-center"> Sign Up </p>
  <p class="text-center">
    Get access to amazing deals <br>
    and notifications on the latest items.
  </p>

  <div class="row">
    <form action="" method="post" enctype="" class="col-9 col-md-6 col-lg-3">
        <div>
            <label for="first_name">First Name</label>
            <br>
            <input class="form-control" name="first_name" type="text" id="first_name" class="" placeholder="First Name" required>
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <br>
            <input class="form-control" name="last_name" type="text" id="last_name" class="" placeholder="Last name" required>
        </div>

        <div>
            <label for="email_address">Email Address</label>
            <br>
            <input class="form-control" name="email_address" type="text" id="email_address" class="" placeholder="Email Address" required>
        </div>

        <div>
            <label for="user_password">Password</label>
            <br>
            <input class="form-control" name="password" type="password" id="user_password" class="" placeholder="Password" required>
        </div>

        <div>
            <label for="user_password_confirmation">Confirm Password</label>
            <br>
            <input class="form-control" name="confirm_password" type="password" id="user_password_confirmation" class="" placeholder="Confirm Password" required>
        </div>

        <div>
            <input id="form-submit-btn" class="btn btn-block" name="submit" type="submit" id="submit_btn" class="" value="Submit">
        </div>

        <hr>

        <p class="text-center">
          Already a registered user?
                    <br>
          <a href="login.php">Log In</a>
        </p>

    </form>

  </div>
</body>
</html>