<?php
    include "common.php";
    $db = get_PDO();
    $qry = "SELECT * FROM customers WHERE set4 = 0 AND set4p = 0";
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
        echo "+660" . $row['mobile'] . ",";
        echo $row['email'] . "\n";
    }
    // echo "\xEF\xBB\xBF"; // UTF-8 BOM
?>