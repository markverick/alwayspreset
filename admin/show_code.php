<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <title>Alwayspreset - List Code</title>

</head>

<body>
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Code</th>
        <th scope="col">Note</th>
        <th scope="col">Date Added</th>
        <th scope="col">Date Expired</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "common.php";
        $db = get_PDO();
        $qry = "SELECT * FROM dl_list
                INNER JOIN dl_code
                ON dl_list.id = dl_code.id";
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
          echo '</tr>';
          // echo "$code $note $date_added $date_expr <br>";
        }
        // header("Content-type: application/json");
        // echo json_encode($output);
      ?>
    </tbody>
  </table>
</body>
<!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->

  <!-- Custom scripts for this template -->