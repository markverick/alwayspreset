<?php
  $target_dir = "img/receipts/";
  $target_file = $target_dir . basename($_FILES["receiptImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["receiptImage"]["tmp_name"]);
    if($check !== false) {
      // output_error("File is an image - " . $check["mime"] . ".");
      $uploadOk = 1;
    } else {
      output_error("รูปใบเสร็จไม่รองรับ กรุณาตรวจสอบว่าถูกต้องหรือไม่ค่ะ");
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  // if (file_exists($target_file)) {
  //   output_error("Sorry, file already exists.");
  //   $uploadOk = 0;
  // }
  // Check file size
  if ($_FILES["receiptImage"]["size"] > 10000000) {
    output_error("ชนาดไฟล์รูปเกิน กรุณาติดต่อแอดมิน");
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    output_error("นามสกุลรูปใบเสร็จไม่รองรับ กรุณาตรวจสอบว่าถูกต้องหรือไม่ค่ะ");
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["receiptImage"]["tmp_name"], $target_file)) {
      include "/success.html";
    } else {
      output_error("Sorry, there was an error uploading your file.");
    }
  }
  function output_error($msg) {
    include("failure.php");
  }
?>
