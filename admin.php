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
        echo ('<h3 class="d-flex justify-content-center">I guess you are cool enough to be an admin</h3><h2 class="d-flex justify-content-center">DVPW{C00L_4DM1N}</h2><h4 class="d-flex justify-content-center">I store my logs for everyone to see! it\'s at /logs/php.log</h4><!-- My user agent, totally not vulnerable *wink wink* --><p class="d-flex justify-content-center"> My user agent: '.$_SERVER['HTTP_USER_AGENT']??null.'</p>');
      } else {
        echo ('<h3 class="d-flex justify-content-center">You are not admin...yet!</h3>');
        die();
      }
    ?>
  </body>
</html>