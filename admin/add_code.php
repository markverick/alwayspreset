<?php
  
  include "common.php";
  $db = get_PDO();
  // header("Content-type: application/json");
  // echo json_encode($_POST);
  // handle_request_error("Missing parameters.");
     date_default_timezone_set("Asia/Bangkok");
    if (!isset($_POST['days'])) $days = "1";
    else $days = "" . $_POST['days'];
  // return;
  try {
    date_default_timezone_set("Asia/Bangkok");
    $date_added = date("Y-m-d H:i:s");
    $date_expr = date("Y-m-d H:i:s", strtotime("{$date_added} +{$days} days"));
    // echo $date_added .  "\n";
    // echo $date_expr;
    $ext = "";
    $ext_val = "";
    foreach ($_POST as $key=>$val) {
      if(substr($key, 0, 3) == "set") {
        $ext .= ", {$key}";
        $ext_val .= ", 1";
      }
    }

    $qry = "INSERT INTO dl_list(note, date_added, date_expr". $ext . ") VALUES (\"{$_POST['note']}\", \"{$date_added}\", \"{$date_expr}\"{$ext_val})";
    // echo $qry;
    // return;
    $db->exec($qry);
    $id = $db->lastInsertId();
    $qry = "SELECT dl_code.code
            FROM dl_code
            INNER JOIN dl_list
            ON dl_code.id = dl_list.id
            WHERE dl_list.id = {$id}";
    $stmt = $db->query($qry);
    $code = $stmt->fetch();
    $s = sprintf('%05d', $code['code']);
    echo $s;
  } catch (PDOException $ex) {
    handle_db_error();
  }
?>