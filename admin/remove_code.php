<?php
  
  include "common.php";
  $db = get_PDO();
  // header("Content-type: application/json");
  // echo json_encode($_POST);
  // handle_request_error("Missing parameters.");
  date_default_timezone_set("Asia/Bangkok");
  try {
    $date_expr = date("Y-m-d H:i:s");
    // echo $qry;
    $id = $_POST['id'];
    $qry = "UPDATE dl_list SET date_expr=:date_expr WHERE id=:id";
    $stmt = $db->prepare($qry);
    $params = array("date_expr" => $date_expr, "id" => $id);
    $stmt->execute($params);
  } catch (PDOException $ex) {
    handle_db_error();
  }
?>
