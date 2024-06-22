<?php
  if(isset($_POST["calculate"])){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    $total = $n1 + $n2 + $n3;
  }
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="calculator.php" method="$_POST">
      <div>
        <label for="">Number 1</label>
        <input type="number" name="n1" id="">
      </div>
      <div>
        <label for="">Number 2</label>
        <input type="number" name="n2" id="">
      </div>
      <div>
        <label for="">Number 3</label>
        <input type="number" name="n3" id="">
      </div>
      <div>
        <button type="submit" name="calculate">Submit</button>
      </div>
      <?php 
        if (isset($_POST["calculate"])) {
          echo $total;
        }
      
      ?>
    </form>
  </body>
  </html>