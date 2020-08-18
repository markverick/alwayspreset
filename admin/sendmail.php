<?php
  
  include "common.php";
  $db = get_PDO();
  date_default_timezone_set("Asia/Bangkok");
  try {
    $to = $_POST['to'];
    $subject = "รหัสดาวน์โหลดของคุณคือ " . $_POST['code'];
    $msg = "เรียนคุณ " . $_POST['name']
    . "\r\nขอบคุณสำหรับชำระเงินค่ะ รหัสดาวน์โหลดของคุณคือ: "
    . $_POST['code']
    . "\r\nกรุณาจำรหัสเพื่อใช้ในการดาวน์โหลดสินค้าที่เว็ปไซต์ด้านล่าง:"
    . "\r\nhttps://www.alwayspreset.com/download.html";
    $headers = array("From: Alwayspreset@alwayspreset.com",
        "Reply-To: Alwayspreset@alwayspreset.com",
        "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers = implode("\r\n", $headers);
    $param = '-t -i -f Alwayspreset@alwayspreset.com';
    mail($to, $subject, $msg, $headers, $param);
  } catch (PDOException $ex) {
    handle_db_error($ex);
  }
?>