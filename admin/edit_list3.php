<?php
  
  include "common.php";
  $db = get_PDO();
  try {
    date_default_timezone_set("Asia/Bangkok");
    $date_expr = date("Y-m-d H:i:s", strtotime($_POST['expr'] . "  23:59:59"));
    $note = $_POST['note'];
    $id = $_POST['id'];
    $ext = "";
    $json = file_get_contents('filemap.json');
    $filemap = json_decode($json, true);
    foreach ($filemap as $set) {
      foreach ($set['content'] as $tone) {
        $assoc[$tone['id']] = 0;
      }
    }
    foreach ($_POST as $key=>$val) {
      if(substr($key, 0, 3) == "set") {
        $assoc[$key] = 1;
      }
    }
    foreach ($assoc as $key=>$val) {
        $ext .= ", {$key}={$val}";
      }
    $qry = "UPDATE dl_list SET date_expr=\"{$date_expr}\" , note=\"{$note}\"" . $ext . " WHERE id={$id}";
    echo $qry;
    $db->exec($qry);
  } catch (PDOException $ex) {
    handle_db_error();
  }
?>