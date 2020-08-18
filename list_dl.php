<?php
  include "admin/common.php";
  if (isset($_POST['code'])) {
    $db = get_PDO();
    $qry = "SELECT * FROM dl_list
            INNER JOIN dl_code
            ON dl_list.id = dl_code.id
            WHERE dl_code.code = {$_POST['code']}
            AND dl_list.date_expr >= NOW();";
    $ret = $db->query($qry) -> fetch(PDO::FETCH_ASSOC);
    header("Content-type: text/html");
    if(!$ret || count($ret) == 0) {
      echo '<h5>ไม่พบรหัสดังกล่าว กรุณาตรวจสอบดูอีกครั้งค่ะ</h5>';
      return;
    }
    foreach ($ret as $key=>$val) {
      if($val === "1") {
        $output[] = $key;
        $tones = "";
        $items = glob("admin/presets/" . $key . "/*");
        $set = substr(explode("_", $key)[0], 3);
        if (count($items) == 1) {
          $value = $items[0];
          $i = "ดาวน์โหลดเซ็ต {$set} ทั้งหมด (คอมพิวเตอร์)";
          $tone_pc = "<form target=\"_blank\" class = \"w-100\" action=\"download.php\" method=\"post\">
                        <button type=\"submit\" name=\"url\" value=\"{$value}\" class=\"w-100 btn btn-danger btn\">{$i}</button>
                      </form>";
          echo '<div class="row justify-content-center align-items-center my-2 dl-item">'
                  . $tone_pc .
                '</div>
                <hr>';
          continue;
        }
        $name = basename($items[0], " 00.zip");
        if($name == "SP") $name = "Special";
        else if($name == "A" || $name == "B" || $name == "C") {
          $set = "Limited";
          $name = "Set " . $name;
        }
        foreach ($items as $id=>$value) {
          if($id==0) continue;
          $i = "โทน " . $id;
          if($name == "Special" || $name == "Set A" || $name == "Set B" || $name == "Set C") {
            $i = explode("-", basename($value, ".dng"))[1];
          }
          $tones .= "<form target=\"_blank\" action=\"download.php\" method=\"post\">
  <button type=\"submit\" name=\"url\" value=\"{$value}\" class=\"btn-link dropdown-item\">{$i}</button>
</form>";
        }
        $value = $items[0];
        $tone_pc = "<form target=\"_blank\" class = \"w-50\" action=\"download.php\" method=\"post\">
          <button type=\"submit\" name=\"url\" value=\"{$value}\" class=\"w-100 btn btn-secondary btn-sm a-pc\">คอมพิวเตอร์</button>
        </form>";
        echo '<div class="row justify-content-center align-items-center my-2 dl-item">
                <div class="col-12 col-md-6 d-flex ">
                  <h5 class="my-2">Set '. $set . ': ' . $name . '</h5>
                </div>
                <div class="col-12 col-md-6">
                  <div class="btn-group w-100" role="group">
                    <div class="btn-group w-50" role="group">
                      <button id="mobile-1" class="btn btn-primary btn-sm a-phone dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">โทรศัพท์</button>
                      <div class="dropdown-menu" aria-labelledby="mobile-1">'
                       . $tones .
                      '</div>
                    </div>'
                    . $tone_pc .
                  '</div>
                </div>
              </div>';
      }
    }
    // header("Content-type: application/json");
    // echo json_encode($output);
  } else {
    echo '<h5>ไม่พบรหัสดังกล่าว กรุณาตรวจสอบดูอีกครั้งค่ะ</h5>';
    // header("Content-type: application/json");
    // $output[] = "none";
    // echo json_encode($output);
  }
?>