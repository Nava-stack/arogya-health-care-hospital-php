<?php include './layout/top.php'?>
<?php 
  include "db_config.php";
?>
<select name="" id="">
      <?php
        $qry = "SELECT * FROM tblUsers";

        $res = $con->query($qry);

        while($data=$res->fetch_assoc()){
          echo "<option value=''>". $data['UserID']."-".$data['Name']."</option>";
        }

      ?>
</select>
<?php include './layout/bottom.php'?>
