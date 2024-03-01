<?php
  include 'utils.php';
  if ($_SERVER['REQUEST_METHOD'] === "POST" && !empty($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
  }
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW Logout</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php 
      include 'templates/navbar.php';
      if (!empty($_SESSION["username"])) {
        echo '<h3 class="d-flex justify-content-center">You are logged in as ' . $_SESSION["username"] . 
    '</h3>
    <div class="d-flex justify-content-center">
      <h4>
        Log out?
      </h4>
      <form action="" method="post">
        <input type="hidden" name="logout" value="1"></input>
        <input type="submit" class="btn btn-danger ms-2" value="Yes!"></input>
      </form>
    </div>';
      } else {
        echo '<div class="d-flex justify-content-center">
      <h3>
        You need to log in first!
      </h3>
      </div>';
      }
    ?>
  </body>
</html>

    <?php //session_unset();
//session_destroy();?>