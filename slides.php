<div id="<?php echo $_GET['set'] ?>" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
      $n = sizeof(glob("img/1x/{$_GET['set']}/*")) - 1;
      echo "<li data-target=\"#{$_GET['set']}\" data-slide-to=\"0\" class=\"active\"></li>\n";
      if ($n < 0 ) $n = 0;
      while($n--) {
        echo "        <li data-target=\"#{$_GET['set']}\" data-slide-to=\"0\"></li>\n";
      }
    ?>
  </ol>
  <div class="carousel-inner">
    <?php
      $files = glob("img/1x/{$_GET['set']}/*");
      $first = true;
      foreach ($files as $file) {
        if ($first) {
          echo "<div class=\"carousel-item active\">\n";
        } else {
          echo "        <div class=\"carousel-item\">\n";
        }
        echo "          <img class=\"d-block w-100\" src=\"{$file}\" alt=\"First slide\">\n";
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