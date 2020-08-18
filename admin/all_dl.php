<?php
  include "common.php";
  if (isset($_POST['code'])) {
    $db = get_PDO();
    $qry = "SELECT * FROM dl_list
            INNER JOIN dl_code
            ON dl_list.id = dl_code.id
            WHERE dl_code.code = {$_POST['code']}";
    $ret = $db->query($qry) -> fetch(PDO::FETCH_ASSOC);
    // header("Content-type: text/html");
    header("Content-type: application/json");
    foreach ($ret as $key=>$val) {
      if(substr($key, 0, 3) == "set") {
        $json[$key] = $val;
      }
    }
    echo json_encode($json);
  } else {
    // header("Content-type: application/json");
    // $output[] = "none";
    // echo json_encode($output);
  }
?>