<?php
  include "db_config.php";

  if (isset($_GET['userid'])) {
    
    $userid = $_GET['userid'];
    $qry = "SELECT * FROM tblusers WHERE userId = {$userid}";
    $res = $conn->query($qry);

    if ($row = $res->fetch_assoc()) {
      $uname = $row['username'];
      $email = $row['email'];
      $pword = $row['password'];
      $mobile = $row['mobile'];
    }
  }
  

  if (isset($_POST["update"])) {
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $pword = $_POST["password"];
    $mobile = $_POST["mobile"];


    if (empty($uname)||empty($email)||empty($pword)||empty($mobile)) {
      echo "Username or password is empty";
    }else {
      $qryUpd = "UPDATE tblusers SET username ='$uname', email = '$email', password = '$pword', mobile = '$mobile' WHERE userId = '$userid'";

      // echo $qryReg;
      $res = $conn->query($qryUpd);

      if ($res) {
        echo "Updated successfully";
        // header("Location:dashboard.php");
      }else{
        echo "Something went wrong";
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <!-- register24:03-->
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
              action="update.php"
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
                <input type="text" class="form-control" name="username" value="<?php echo $uname;?>"/>
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email"  value="<?php echo $email;?>" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  value="<?php echo $pword;?>"/>
              </div>
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="mobile"  value="<?php echo $mobile;?>"/>
                <input type="hidden" name="userid" id="">
              </div>
              <div class="form-group checkbox">
                <label>
                  <input type="checkbox" /> I have read and agree the Terms &
                  Conditions
                </label>
              </div>
              <div class="form-group text-center">
                <button class="btn btn-primary account-btn" type="submit" name="update">
                  Update
                </button>
              </div>
              <!-- <div class="text-center login-link">
                Already have an account? <a href="login.php">Login</a>
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
  include "./layout/bottom.php";

?>
