<?php
    include "common.php";
    $db = get_PDO();
    $qry = "SELECT * FROM cust_phone";
    $result = $db->query($qry);
    
    //Download csv file
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename=PPImportPhone.csv');
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        // echo $row['first_name'] . ",";
        // echo $row['last_name'] . ",";
        echo "+66" . substr($row['phone'], 1) . "\n";
    }
    // echo "\xEF\xBB\xBF"; // UTF-8 BOM
?>