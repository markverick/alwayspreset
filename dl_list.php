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
    if (!$ret || count($ret) == 0) {
      echo '<h5>ไม่พบรหัสดังกล่าว กรุณาตรวจสอบดูอีกครั้งค่ะ</h5>';
      return;
    }
    $json = file_get_contents("admin/filemap.json");
    $filemap = json_decode($json, true);
    $output = [];
    $map = [];
    // Collection (Grouping) > Set (Entry)> Tone (Dropdown)
    // Loop through possible collection sets
    foreach ($filemap as $coll) {
      // Loop through possible smaller sets
      foreach ($coll['content'] as $set) {
        // Check if the set is available for download
        if ($ret[$set['id']] === "1" && !isset($map[$set['id']])) {
          $entry['title'] = $set['name'];
          // Check if the tone has a custom name
          $mobile_urls = glob("admin/presets/{$set['id']}/*.dng");
          $pc_url = glob("admin/presets/{$set['id']}/*.zip")[0];
          $i = 0;
          $mobile = [];
          if (!isset($set['index'])) {
            foreach($mobile_urls as $url) {
              $i++;
              $mobile[] = array(
                "url" => substr($url, 14),
                "name" => "โทน {$i}"
              );
            }
          } else {
            foreach($mobile_urls as $url) {
              $baseurl = basename($url,".dng");
              $mobile[] = array(
                "url" => substr($url, 14),
                "name" => $baseurl
                // "name" => substr($baseurl, strpos($baseurl, "-") + 1)
              );
            }
          }
          $entry['mobile'] = $mobile;
          $entry['pc_url'] = substr($pc_url, 14);
          $output[] = $entry;
        }
        $map[$set['id']] = 1;
      }
    }
    header('Content-Type: application/json');
    echo json_encode($output);
      
  } else {
    echo '<h5>ไม่พบรหัสดังกล่าว กรุณาตรวจสอบดูอีกครั้งค่ะ</h5>';
  }
?>