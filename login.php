
<!DOCTYPE html>
<html lang="en">
  <!-- login23:11-->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <title>Arogya Health Care</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper account-wrapper">
      <div class="account-page">
        <div class="account-center">
          <div class="account-box">
            <form
              action="checklogin.php"
              class="form-signin"
              method="post"
            >
              <div class="account-logo">
                <a href="dashboard.php"
                  ><img src="img/logo-dark.png" alt=""
                /></a>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" autofocus="" class="form-control" name="username" placeholder="Enter your username"/>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password"/>
              </div>
              <div class="form-group text-right">
                <a href="forgot-password.html">Forgot your password?</a>
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary account-btn" name="login">
                  Login
                </button>
              </div>
              <div class="text-center register-link">
                Don’t have an account? <a href="register.php">Register Now</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>

  <!-- login23:12-->
</html>
