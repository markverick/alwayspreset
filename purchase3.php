<?php
  
  include "admin/common.php";
  $db = get_PDO();
  date_default_timezone_set("Asia/Bangkok");
  include "admin/upload.php";
  $json = file_get_contents("admin/filemap.json");
  $filemap = json_decode($json, true);
  try {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $price = $_POST["price"];
    $bank = $_POST["bank"];
    $receipt = $_POST["receipt"];
    $receipt_url = $target_file;
    $date_submit = date("Y-m-d H:i:s");
    $setid = [];
    foreach ($filemap as $set) {
      if (isset($_POST[$set['id']])) {
          $setid[] = $set['id'];
      }
      //$sets[$set['id']] = isset($_POST[$set['id']]))? 1:0;
    }
    $qry = "INSERT INTO customers(first_name, last_name, email, mobile, price, bank, receipt, receipt_url, date_submit, " . implode(", ", $setid) . ") VALUES (:first_name, :last_name, :email, :mobile, :price, :bank, :receipt, :receipt_url, :date_submit, :" . implode(", :", $setid) . ")";
    $stmt = $db->prepare($qry);
    $params = array("first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "mobile" => $mobile,
                    "price" => $price,
                    "bank" => $bank,
                    "receipt" => $receipt,
                    "receipt_url" => $receipt_url,
                    "date_submit" => $date_submit);
    foreach ($setid as $set) {
        $params[$set] = 1;
    }
    $stmt->execute($params);
    
    
    include("success.php");
  } catch (PDOException $ex) {
    handle_db_error();
  }
?>
