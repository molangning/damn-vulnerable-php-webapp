<?php
  include 'utils.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/navbar.php';?>
    <!-- DVPW{N1C3_1N5P3C7OR} -->
    <h3 class="d-flex justify-content-center">Welcome to the...</h3>
    <h2 class="d-flex justify-content-center">Damn Vulnerable Php Webapp!</h2>
    <div class="d-flex flex-column">
      <h4 class="d-flex justify-content-center">Flags are in the format DVPW{FLAG}</h4>
    <h4 class="d-flex justify-content-center">There are in total 4 flags. You can do anything to get the flags. Good luck!</h4>
    </div>
    <p class="d-flex justify-content-center">
      Flags are in webroot, database, admin portal, this page and /etc/passwd. For /etc/passwd, the entire file is the flag.
    </p>
  </body>
</html>