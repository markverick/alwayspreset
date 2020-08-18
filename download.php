<?php
  include "admin/common.php";
  if (!isset($_POST['url'])) {
    exit;
  }
  $file = "admin/presets/" . $_POST['url'];
  // echo $file;
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=' . strtolower(str_replace(' ', '_', basename($file))));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));
  ob_clean();
  flush();
  readfile($file);
  exit;
?>