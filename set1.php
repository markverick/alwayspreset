<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alwayspreset</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shards.min.css" rel="stylesheet">
  <link href="css/theme.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./">Alwayspreset</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#slides">Set 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#set2">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.facebook.com/alwayspreset/">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="banner">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="text-white mx-auto pt-5">
          Set 1
        </h1>
        <hr>
        <h2 class="text-white lead mt-2 mb-5">
          The Traveler
        </h2>
      </div>
    </div>
      
  </header>

  <!-- Content -->
  <section class="container" id="slides">
    <div class="card text-white">
      <div class="card-img d-flex flex-row">
        <?php
          $files = glob("img/slides/set01/The Forest/*");
          foreach ($files as $file) {
            echo "        <img src=\"" . $file . "\" alt=\"Slide image\">\n";
          }
        ?>
      </div>
      <div class="card-img-overlay">
        <h4 class="card-title">The Forest</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
       
      </div>
      <div class="col">
        <h2>Set 1</h2>
        <h3>The Traveler</h3>
        <p>
พรีเซทที่นักท่องเที่ยวควรมี ไม่ว่าจะเดินทางไปที่ไหน ในเมือง,ป่า,ภูเขา ทะเล ธรรมชาติสวยๆ หรืออยากโชว์ไฟล์สไตล์
ที่หรูหราน่าดึงดูดอย่างเช่น ในคาเฟ่,ถ่ายอาหาร,เครื่องดื่ม 
The traveler ถือว่าเป็นพรีเซทเบสิกที่ควรจะมีไม่ว่าจะเป็นมือใหม่หัดถ่ายภาพ หรือว่าจะเป็นมืออาชีพ พรีเซทชุดนี้ควรมีติดตัว
เพื่อเตรียมพร้อมทุกสถานการณ์ให้ได้ภาพที่สวย น่าดึงดูด
        </p>
        <a href="set1.html" class="btn btn-primary">ดูรายละเอียดเพิ่มเติม</a>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <?php
          $_GET['set']='set02';
          include "slides.php"
        ?>
      </div>
      <div class="col order-sm-first">
        <h2>Set 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <?php
          $_GET['set']='set03';
          include "slides.php"
        ?>
      </div>
      <div class="col">
        <h2>Set 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/nav-scroll.min.js"></script>
  
  <!-- Shards -->
  <script src="js/shards.min.js"></script>
</body>

</html>
