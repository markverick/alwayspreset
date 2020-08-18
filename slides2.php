<div id="<?php echo $_GET['set'] ?>" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
      $url = "img/" . $_GET['url'] . "/*";
      $n = sizeof(glob($url));
      if($n)
        echo "<li data-target=\"#{$_GET['set']}\" data-slide-to=\"0\" class=\"active\"></li>\n";
      for ($i = 1; $i < $n; $i++) {
        echo "        <li data-target=\"#{$_GET['set']}\" data-slide-to=\"{$i}\"></li>\n";
      }
    ?>
  </ol>
  <div class="carousel-inner">
    <?php
      $url = "img/" . $_GET['url'] . "/*";
      $files = glob($url);
      $first = true;
      foreach ($files as $file) {
        if ($first) {
          echo "<div class=\"carousel-item active\">\n";
        } else {
          echo "        <div class=\"carousel-item\">\n";
        }
        echo "          <img class=\"w-100 d-block\" src=\"{$file}\" alt=\"First slide\">\n";
        if ($_GET['hidecap']!=="1") {
          echo "          <div class=\"carousel-caption d-block\">\n";
          echo "            <h5 class=\"mb-0 lead text-white\">" . trim(basename($file, ".jpg"), "@") . "</h5>\n";
          echo "          </div>\n";
        }
        echo "        </div>\n";
        $first = false;
      }
    ?>
  </div>
  <a class="carousel-control-prev" href="#<?php echo $_GET['set'] ?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#<?php echo $_GET['set'] ?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>