<?php 
  $username = 'a';
  $password = 'b';
  echo "INSERT INTO user (name, password) VALUES ('".$username."', '".$password."') WHERE NOT EXISTS (SELECT * FROM user WHERE name = '". $username ."')"
?>