<?php
  include "admin/common.php";
  if (isset($_GET['code'])) {
    date_default_timezone_set("Asia/Bangkok");
    $db = get_PDO();
    $qry = "SELECT * FROM dl_list
            INNER JOIN dl_code
            ON dl_list.id = dl_code.id
            WHERE dl_code.code = {$_GET['code']};
            AND dl_list.date_expr >= NOW()";
    echo("test");
    $stmt = $db->query($qry);
    $ret = $stmt->fetch();
    foreach ($ret as $key=>$val) {
      if($val === true) {
        $output[] = $key;
      }
    }
    echo("test");
    header("Content-type: application/json");
    echo json_encode($output);
  }
?>