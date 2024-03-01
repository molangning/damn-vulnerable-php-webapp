<?php
  if ($_SERVER['REQUEST_METHOD'] === "GET" && !empty($_GET['path'])) {
    $fileContent = file_get_contents($_GET['path']);
    echo $fileContent;
  }
?>