<?php
  include 'db_config.php';

  $uid = $_GET['userid'];

  $qry = "DELETE FROM tblusers WHERE userId = {$uid}";
  $res = $conn->query($qry);

  if ($res) {
    header("Location:view.php?key=deleted");
  }else{
    echo "Somthing went wrong";
  }

?>