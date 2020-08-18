<?php
    include "common.php";
    $db = get_PDO();
    
    //Download csv file
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    if (isset($_GET['store'])) {
      header('Content-Disposition: attachment; filename=customer_' . $_GET['store'] . '.csv');
      $qry = "SELECT * FROM cust_phone WHERE entity=:entity";
      $stmt = $db->prepare($qry);
      $params = array("entity" => $_GET['store']);
      $stmt->execute($params);
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
      {
          // echo $row['first_name'] . ",";
          // echo $row['last_name'] . ",";
          echo "+66" . substr($row['phone'], 1) . "\n";
      }
    } else {
      header('Content-Disposition: attachment; filename=customer_all.csv');
      $qry = "SELECT * FROM cust_phone";
      $result = $db->query($qry);
      while ($row = $result->fetch(PDO::FETCH_ASSOC))
      {
          // echo $row['first_name'] . ",";
          // echo $row['last_name'] . ",";
          echo "+66" . substr($row['phone'], 1) . ", ";
          echo $row['entity'] . "\n";
      }
    }
    // echo "\xEF\xBB\xBF"; // UTF-8 BOM
?>