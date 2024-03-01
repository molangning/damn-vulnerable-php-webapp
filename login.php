<?php
  include 'utils.php';
  include 'db.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['action'])) {
    if ($_POST['action'] === 'Login' && !empty($_POST['username']) && !empty($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      print(checkLogin($username, $password));
      if (checkLogin($username, $password) === true){
        $_SESSION['username'] = $username;
        header("Location: admin.php");
      }
    } else if ($_POST['action'] === 'Register' && !empty($_POST['username']) && !empty($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      if (register($username, $password) === true){
        $_SESSION['username'] = $username;
        header("Location: admin.php");
      }
    }
  }
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DVPW Login/Register</title>
    <?php include 'templates/header.php'; ?>
  </head>

  <body>
    <?php include 'templates/navbar.php';?>
    
    <div class="login-form">
      <h2 class="d-flex justify-content-center">DVPW Login/Register</h2>
      <form class="px-2 pt-3" method="post">
        <div class="mb-3">
          <label for="usernameInput" class="form-label">Username</label>
          <input type="text" class="form-control" id="usernameInput" name="username">
        </div>
        <div class="mb-3">
          <label for="passwordInput" class="form-label">Password</label>
          <input type="password" class="form-control" id="passwordInput" aria-describedby="passwordHint" name="password">
          <div id="passwordHint" class="form-text">Is this vulnerable? I don't know.</div>
        </div>
        <!-- $stmt = $dbh->prepare("SELECT * FROM user WHERE name = '". $username ."' AND password = '". $password."'"); -->
        <input type="submit" name="action" value="Register" class="btn btn-secondary me-1"/>
        <input type="submit" name="action" value="Login" class="btn btn-primary"/>
      </form>
    </div>
  </body>
</html>