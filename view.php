<?php
  include 'db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <?php
    if (isset($_GET['key'])) {
      if ($_GET['key']=='deleted') {
        echo "<div class='alert alert-primary' role='alert'>
        Successfully Deleted..!
      </div>";
      }
    }
  ?>
  <table border="1">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $qryReg = "SELECT * FROM tblusers";

        $res = $conn->query($qryReg);

        while($row = $res->fetch_assoc()){
          echo "      <tr>
          <td>{$row['username']}</td>
          <td>{$row['email']}</td>
          <td>{$row['password']}</td>
          <td>{$row['mobile']}</td>
          <td>
            <a href='update.php?userid={$row['userId']}'>Edit</a>
            <a href='deletedpage.php?userid={$row['userId']}'>Delete</a>
          </td>
        </tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>