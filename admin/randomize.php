<?php
  if(isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    include "common.php";
  	$db = get_PDO();
  	try {
      for($i = 0; $i < 100000; $i++) {
        $arr[] = "({$i})";
      }
      shuffle($arr);
      $ext = implode($arr, ", ");
      // echo $arr . "\n";
      $qry = "INSERT INTO dl_code(code) VALUES {$ext}";
      
      // echo $qry;
      // return;
      $db->exec($qry);
    } catch (PDOException $ex) {
      handle_db_error();
    }
  }

?>