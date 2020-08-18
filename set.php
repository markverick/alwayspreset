<?php
  $files = glob("img/1x/{$_GET['set']}/*");
  header('Content-type: application/json');
  echo json_encode($files);
?>