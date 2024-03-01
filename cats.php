<?php
  include 'utils.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW cats</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php 
      include 'templates/navbar.php';
      if (empty($_SESSION["username"]) || $_SESSION["username"] !== "admin"){
        echo ('<h3 class="d-flex justify-content-center">Only the admins can see the cats.</h3></body></html>');
        die();
      } 
    ?>
    <img src="/view.php?path=cats/cat.gif">
    <p>This cat is loaded in an insecure way, can you get /etc/passwd?</p>
  </body>
</html>