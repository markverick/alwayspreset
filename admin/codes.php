<?php
  include "common.php";
  $db = get_PDO();
  if(isset($_GET['row']) && $_GET['row']) {
    $qry = "SELECT * FROM dl_list
            INNER JOIN dl_code
            ON dl_list.id = dl_code.id
            ORDER BY dl_list.date_added DESC
            LIMIT " . $_GET['row'];
  } else {
    $qry = "SELECT * FROM dl_list
            INNER JOIN dl_code
            ON dl_list.id = dl_code.id
            ORDER BY dl_list.id DESC";
  }
  $result = $db->query($qry);
  header("Content-type: text/html");
  while ($row = $result->fetch(PDO::FETCH_ASSOC))
  {
    $id = $row['id'];
    $code = $row['code'];
    $note = $row['note'];
    $date_added = $row['date_added'];
    $date_expr = $row['date_expr'];
    echo '<tr>';
    echo '  <th scope="row">' . $id . '</th>';
    echo '  <td>' . $code . '</td>';
    echo '  <td>' . $note . '</td>';
    echo '  <td>' . $date_added . '</td>';
    echo '  <td>' . $date_expr . '</td>';
    echo "  <td><button class=\"text-white btn btn-secondary btn-sm\" data-toggle=\"modal\" data-id=\"{$id}\" data-code=\"{$code}\" data-note=\"{$note}\" data-expr=\"{$date_expr}\" data-target=\"#modal\">Edit</button></td>";
    echo "  <td><button class=\"remove-btn text-white btn btn-danger btn-sm\" data-id=\"{$id}\">Delete</button></td>";
    echo '</tr>';
    // echo "$code $note $date_added $date_expr <br>";
  }
  // header("Content-type: application/json");
  // echo json_encode($output);
?>