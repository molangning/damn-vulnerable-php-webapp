<?php
    function checkLogin($username, $password){
    $dbh = new PDO('sqlite:db.sqlite');
    $stmt = $dbh->prepare("SELECT * FROM user WHERE name = '". $username ."' AND password = '". $password."'");
    $stmt->execute();
    $user = $stmt->fetch();
    if($user){
      return true;
    }
    return false;   
  }
  function register($username, $password){
    $dbh = new PDO('sqlite:db.sqlite');
    $stmt = $dbh->prepare("SELECT * FROM user WHERE name = '". $username ."'");
    
    if (empty($stmt->execute()) === false) {
      $stmt = $dbh->prepare("INSERT INTO user (name, password) VALUES ('".$username."', '".$password."')");
      return $stmt->execute();
    } else {
      return false;
    }
  }
?>