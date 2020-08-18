<?php
  include "common.php";
  $db = get_PDO();
  try {
    $code = $_POST['code'];
    $id = $_POST['id'];
    $qry = "UPDATE customers SET code = :code WHERE id=:id";
    $stmt = $db->prepare($qry);
    $params = array("code" => $code, "id" => $id);
    $stmt->execute($params);
  } catch (PDOException $ex) {
    handle_db_error();
  }
?>
