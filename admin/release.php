<!-- Not used -->
<?php
  include "common.php";
  $db = get_PDO();
  $qry = "SELECT * FROM customers";
  $result = $db->query($qry);
  header("Content-type: text/html");
  $json = file_get_contents("filemap.json");
  $filemap = json_decode($json, true);
  while ($row = $result->fetch(PDO::FETCH_ASSOC))
  {
    $id = $row["id"];
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $email = $row["email"];
    $mobile = $row["mobile"];
    $bank = $row["bank"];
    $receipt = $row["receipt"];
    $date_submit = $row["date_submit"];
    $items = [];
    foreach ($filemap as $set) {
      if ($row[$set['id']]) {
        $items[] = $row[$set['id']];
      }
      //$sets[$set['id']] = $row[$set['id']];
    }

    $item_list = implode(", ", $items);
    $flare1 = $row["flare1"];
    $code = $row["code"]? "Yes": "No";
    echo '<tr>';
    echo '  <th scope="row">' . $id . '</th>';
    echo '  <td>' . $first_name . '</td>';
    echo '  <td>' . $last_name . '</td>';
    echo '  <td>' . $email . '</td>';
    echo '  <td>' . $mobile . '</td>';
    echo '  <td>' . $bank . '</td>';
    echo '  <td>' . $item_list . '</td>';
    echo '  <td>' . $date_submit . '</td>';
    echo '  <td>' . $code . '</td>';
    echo "  <td><button class=\"text-white btn btn-danger btn-sm\" data-toggle=\"modal\" data-id=\"{$id}\" data-code=\"{$code}\" data-note=\"{$note}\" data-expr=\"{$date_expr}\" data-target=\"#modal\">Generate</button></td>";

    echo '</tr>';
    // echo "$code $note $date_added $date_expr <br>";
  }
  // header("Content-type: application/json");
  // echo json_encode($output);
?>