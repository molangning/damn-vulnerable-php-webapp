<?php
  include 'utils.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW admin area</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php 
      include 'templates/navbar.php';
      if (!empty($_SESSION["username"]) && $_SESSION["username"] === "admin"){
        echo ('<h3 class="d-flex justify-content-center">I guess you are cool enough to be an admin</h3><h2 class="d-flex justify-content-center">DVPW{C00L_4DM1N}</h2>');
      } else {
        echo ('<h3 class="d-flex justify-content-center">You are not admin...yet!</h3>');
        die();
      }
    ?>

</html>