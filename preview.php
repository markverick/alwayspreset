<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Landing Page">
  <meta name="author" content="Alwayspreset">

  <title>Alwayspreset</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:300&display=swap" rel="stylesheet"> 

  <!-- Custom styles for this template -->
  <link href="css/shards.min.css" rel="stylesheet">
  <link href="css/theme.css?v=13" rel="stylesheet">

</head>

<body id="page-top" style="background-color: #4e545b; color: #fff">
  <div class="text-center pt-5">
    <h1 class="text-white">Set 1 : The Traveler</h1>
    <h2 style="color:#fff">52 โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set1 = glob("img/slides/set01v2/*");
      foreach ($set1 as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 150px\" class=\"mx-1 my-3\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
   <div class="text-center pt-5">
    <h1 class="text-white">Set 1 : The Traveler</h1>
    <h2 style="color:#fff">50 โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set1 = glob("img/slides/set01xv2/*");
      foreach ($set1 as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 150px\" class=\"mx-1 my-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class="text-center pt-5">
    <h1 class="text-white">Set 2 : Portrait</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set2 = glob("img/slides/set02v2/*");
      foreach ($set2 as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 100px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class="text-center pt-5">
    <h1 class="text-white">Set 3 : ASLDJSAJHd</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set3 = glob("img/slides/set03v2/*");
      foreach ($set3 as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 100px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class="text-center pt-5">
    <h1 class="text-white">Set 4 : Film</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/set04v2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 100px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class="text-center pt-5">
    <h1 class="text-white">Set 5 : Blabla</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/set05v3/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 200px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class="text-center pt-5">
    <h1 class="text-white">Set 1 Pro</h1>
    <h2 style="color:#fff">10 โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/set01pv2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 300px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class="text-center pt-5">
    <h1 class="text-white">Set 4 Pro</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/set04pv2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 300px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class=" text-center pt-5">
    <h1 class="text-white">Set A</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/setav2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 150px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class=" text-center pt-5">
    <h1 class="text-white">Set B</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/setbv2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 300px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class=" text-center pt-5">
    <h1 class="text-white">Set C</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/setcv2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 300px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <div class=" text-center pt-5">
    <h1 class="text-white">Set Mini</h1>
    <h2 style="color:#fff">xx โทน</h2>
    <div class="d-flex flex-wrap justify-content-center">
      <?php
      $set = glob("img/slides/setminiv2/*");
      foreach ($set as $s) {
        if (strpos($s, "@") === false)
          echo "<img style=\"height: 150px\" class=\"m-1\" src=\"". $s ."\">";

      }
      ?>
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 01.jpg"> -->
      <!-- <img class="m-5" src="img/slides/set01/tone1/The Forest 02.jpg"> -->
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/nav-scroll.min.js"></script>

  <!-- Shards -->
  <script src="js/shards.min.js"></script>
  
   <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/236cc9cd4c.js"></script>
</body>
</html>
