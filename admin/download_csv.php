<?php
    include "common.php";
    $db = get_PDO();
    $list = array_keys($_POST);
    foreach ($list as $item) {
        $ext[] = $item . "=1";
    }
    if (!$list) {
        $qry = "SELECT * FROM customers";
    } else {
        $ext2 = implode(", " , $ext);
        $qry = "SELECT * FROM customers WHERE " . $ext2;
    }
    // echo $qry;
    $result = $db->query($qry);
    
    //Download csv file
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename=Customers_Export.csv');
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        // echo $row['first_name'] . ",";
        // echo $row['last_name'] . ",";
        echo "+66" . substr($row['mobile'], 1) . ",";
        echo $row['email'] . "\n";
    }
    // echo "\xEF\xBB\xBF"; // UTF-8 BOM
?>