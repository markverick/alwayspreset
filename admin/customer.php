<?php
  include "common.php";
  $db = get_PDO();
  $row = isset($_GET['row'])? $_GET['row']: "10";
  $qry = "SELECT * FROM customers ORDER BY date_submit DESC LIMIT {$row}";
  $result = $db->query($qry);
  header("Content-type: application/json");
  $json = file_get_contents("filemap.json");
  $filemap = json_decode($json, true);
  while ($row = $result->fetch(PDO::FETCH_ASSOC))
  {
    $items = [];
    foreach ($filemap as $set) {
      if ($row[$set['id']]) $items[] = $set['name'];
    }

    $row['item_list'] = implode(", ", $items);
    $out[] = $row;
  }
  echo json_encode($out);
?>