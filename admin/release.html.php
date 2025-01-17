<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alwayspreset - Release Codes</title>

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
  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="viewReceipt" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewReceipt">รูปใบเสร็จ/ส่งอีเมล</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="img-fluid" id="receiptImage" src = "">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิดหน้าต่าง</button>
          <button id="sendMail" type="button" class="btn btn-primary">ส่งอีเมล</button>
        </div>
      </div>
    </div>
  </div>

  <!-- EditModal -->
  <div class="modal fade" id="editCodeModal" tabindex="-1" role="dialog" aria-labelledby="editCode" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCode">แก้ไขเซ็ต</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editCodeForm">
            <input class="d-none" type="hidden" id="id" name="id">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="set1" name="set1">
              <label class="form-check-label" for="set1">Set 1</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="set2" name="set2">
              <label class="form-check-label" for="set2">Set 2</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="set3" name="set3">
              <label class="form-check-label" for="set3">Set 3</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="set4" name="set4">
              <label class="form-check-label" for="set4">Set 4</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="seta" name="seta">
              <label class="form-check-label" for="seta">Set A</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="setb" name="setb">
              <label class="form-check-label" for="setb">Set B</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="setc" name="setc">
              <label class="form-check-label" for="setc">Set C</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sets1" name="sets1">
              <label class="form-check-label" for="sets1">Earth Tone</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sets2" name="sets2">
              <label class="form-check-label" for="sets2">Naiipa</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sets3" name="sets3">
              <label class="form-check-label" for="sets3">Street</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sets4" name="sets4">
              <label class="form-check-label" for="sets4">Coast</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sets5" name="sets5">
              <label class="form-check-label" for="sets5">Film Tone</label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="save" type="button" class="btn btn-primary">บันทึก</button>
        </div>
      </div>
    </div>
  </div>

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
    <div class="card card-body">
      <h2>ยืนยันรหัสดาวน์โหลด</h2>
      <a target="_blank" href="https://th.wikipedia.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%98%E0%B8%99%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2#%E0%B8%98%E0%B8%99%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B8%9E%E0%B8%B2%E0%B8%93%E0%B8%B4%E0%B8%8A%E0%B8%A2%E0%B9%8C%E0%B9%84%E0%B8%97%E0%B8%A2">รายชื่อรหัสธนาคาร</a>
      <a target="_blank" href="download_csv.php">ดาวน์โหลดทั้งหมด</a>
      <form class="form-inline" method="post" action="download_csv.php">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="set1" id="set1" value="set1">
          <label class="form-check-label" for="set1">1</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="set2" id="set2" value="set2">
          <label class="form-check-label" for="set2">2</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="set3" id="set3" value="set3">
          <label class="form-check-label" for="set3">3</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="seta" id="seta" value="seta">
          <label class="form-check-label" for="seta">A</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="setb" id="setb" value="setb">
          <label class="form-check-label" for="setb">B</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="setc" id="setc" value="setc">
          <label class="form-check-label" for="setc">C</label>
        </div>
        <button type="submit" class="btn btn-default">โหลดข้อมูล</button>
      </form>
      <div class="input-group mb-3">
        <input class="form-control" id="numRow" value="10">
        <div class="input-group-append">
          <btn id="filter" class="btn btn-sm btn-primary">เลือกจำนวนแถว</btn>
        </div>
      </div>
      
      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ชื่อจริง</th>
              <th scope="col">นามสกุล</th>
              <th scope="col">อีเมล</th>
              <th scope="col">เบอร์โทร</th>
              <th scope="col">ราคา</th>
              <th scope="col">ใบเสร็จ</th>
              <th scope="col">สินค้า</th>
              <th scope="col">เวลาที่จ่าย</th>
              <th scope="col">รหัส</th>
              <th scope="col">แก้ไขรหัส</th>
              <th scope="col">สร้างรหัส</th>
            </tr>
          </thead>
          <tbody id="table">
            
          </tbody>
        </table>
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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../js/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->

  <!-- <script src="../js/set.js"></script> -->
  <script src="release.js?version=4"></script>
  
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/236cc9cd4c.js"></script>
</body>

</html>
