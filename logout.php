<?php
  include 'utils.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW Logout</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/navbar.php';?>
    <h3 class="d-flex justify-content-center">You are logged in as <?php echo $_SESSION['username'];?></h3>
    <div class="d-flex justify-content-center">
      <h4>
        Log out?
      </h4>
      <button type="button" class="btn btn-danger ms-2">Yes!</button>
    </div>
</html>

    <?php //session_unset();
//session_destroy();?>