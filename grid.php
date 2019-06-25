<div class="row justify-content-center">
  <?php
    $files = glob("img/1x/{$_GET['set']}/*");
    echo "\n";
    $i = 0;
    foreach ($files as $file) {
      $i++;
      echo "<div class=\"p-2 col-sm-12 col-md-6 col-lg-6 col-xl-4\">\n";
      echo "  <a class=\"card\" id=\"{$_GET['set']}/tone{$i}\">\n";
      echo "    <div class=\"overlay\"></div>\n";
      echo "    <img class=\"card-img-top d-block w-100\" src=\"{$file}\">\n";
      echo "    <btn class=\"btn btn-primary\">ตัวอย่างภาพเซ็ตนี้</btn>\n";
      echo "  </a>\n";
      echo "</div>\n";
    }
  ?>
</div>