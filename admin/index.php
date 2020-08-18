<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alwayspreset - Admin</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- Custom fonts for this template -->
  <link href="../css/fontawesome-all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shards.min.css" rel="stylesheet">
  <link href="../css/theme.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-shrink">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./"><strong>Admin</strong>preset</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          เมนู
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a target="_blank" class="nav-link js-scroll-trigger" href="/purchase.html">หน้าสั่งซื้อ</a>
          </li>
          <li class="nav-item">
            <a target="_blank" class="nav-link js-scroll-trigger" href="/download.html">หน้าดาวน์โหลด</a>
          </li>
          <li class="nav-item">
            <a target="_blank" class="nav-link js-scroll-trigger" href="codes.html">แก้รหัส</a>
          </li>
          <li class="nav-item">
            <a target="_blank" class="nav-link js-scroll-trigger" href="release.html">ยืนยันการสั่งซื้อ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="container mb-4">
    <div class="row justify-content-center">

      <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card card-body">
          <h2>เพิ่มรหัสดาวน์โหลด</h2>
          <form id="addCode">
            <div class="row">
              <?php
              $json = file_get_contents('filemap.json');
              $file_map = json_decode($json, true);
              foreach ($file_map as $set) {
                echo '<div class="col-12 col-md-4">';
                echo "<h5>{$set['alias']}</h5>";
                $i = 0;
                foreach ($set['content'] as $tone) {
                  if ($set['id'] == "set5" && $i == 8) {
                    echo '</div>';
                    echo '<div class="col-12 col-md-4">';
                  }
                  echo '<div class="form-check">';
                  if (isset($tone['batch'])) {
                    echo "<input class=\"form-check-input\" type=\"checkbox\" id=\"{$tone['id']}\" name=\"{$tone['id']}\">";
                  } else {
                    echo "<input class=\"form-check-input {$set['id']}\" type=\"checkbox\" id=\"{$tone['id']}\" name=\"{$tone['id']}\">";
                  }
                  echo "<label class=\"form-check-label\" for=\"{$tone['id']}\">{$tone['name']}</label>";
                  echo '</div>';
                  $i++;
                }
                echo '</div>';
              }
              ?>
            </div>
            <div class="container text-center" style="max-width: 300px">
              <label class="form-label">จะเอากี่วัน ไม่ใส่ = 2</label>
              <input type="text" name="days" value="2" placeholder="2" class="text-center form-control">
              <label class="form-label">Additional Notes eg. Customer's name/email อย่าเกิน 255 ตัวอักษร</label>
              <input type="text" name="note" class="text-center form-control">
              <btn id="submit" type="submit" class="btn btn-primary my-2">Submit</btn>
              <h1 id="code"></h1>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Alwayspreset 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <!-- Plugin JavaScript -->

  <!-- Custom scripts for this template -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/admin-index.js?version=2"></script>
</body>

</html>
