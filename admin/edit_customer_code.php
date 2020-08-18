<?php
  
  include "common.php";
  $db = get_PDO();
  // header("Content-type: application/json");
  try {
    $json = file_get_contents("filemap.json");
    $filemap = json_decode($json, true);
    $id = $_POST['id'];
    foreach ($filemap as $set) {
      $assoc[$set['id']] = 0;
    }
    foreach ($_POST as $key=>$val) {
      if(substr($key, 0, 3) == "set") {
        $assoc[$key] = 1;
      }
    }
    foreach ($assoc as $key=>$val) {
      $ext[] = "{$key}={$val}";
    }
    $qry = "UPDATE customers SET " . implode(", ",$ext) . " WHERE id={$id}";
    echo $qry;
    $db->exec($qry);
  } catch (PDOException $ex) {
    handle_db_error();
  }

?>