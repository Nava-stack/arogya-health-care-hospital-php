<?php
  include "db_config.php";

  if (isset($_POST["login"])) {
    $un = $_POST["username"];
    $pw = $_POST["password"];

    if (empty($un)||empty($pw)) {
      echo "Username or password is empty";
    }else {
      $qryLogin = "SELECT * FROM tblusers WHERE username = '$un' AND password = '$pw'";
      //$qryReg = "INSERT INTO tblusers(username, password) VALUES ('kumar','123'), (NULL, 'ram', '234')";

      $res = $conn->query($qryLogin);

      if ($res->fetch_assoc()) {
        header("Location:dashboard.php");
      }else{
        echo "Username or password is incorrect";
      }
    }
  }
?>