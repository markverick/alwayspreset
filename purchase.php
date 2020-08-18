<?php
  
  include "admin/common.php";
  $db = get_PDO();
  date_default_timezone_set("Asia/Bangkok");
  try {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $price = $_POST["price"];
    $bank = $_POST["bank"];
    $receipt = $_POST["receipt"];
    $date_submit = date("Y-m-d H:i:s");
    $set1 = isset($_POST["set1"])?1:0;
    $set2 = isset($_POST["set2"])?1:0;
    $set3 = isset($_POST["set3"])?1:0;
    $set4 = isset($_POST["set4"])?1:0;
    $set4 = isset($_POST["set4"])?1:0;
    $seta = isset($_POST["seta"])?1:0;
    $setb = isset($_POST["setb"])?1:0;
    $setc = isset($_POST["setc"])?1:0;
    $qry = "INSERT INTO customers(first_name, last_name, email, mobile, price, bank, receipt, date_submit, set1, set2, set3, set4, seta, setb, setc) VALUES (:first_name, :last_name, :email, :mobile, :price, :bank, :receipt, :date_submit, :set1, :set2, :set3, :set4, :seta, :setb, :setc)";
    $stmt = $db->prepare($qry);
    $params = array("first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "mobile" => $mobile,
                    "price" => $price,
                    "bank" => $bank,
                    "receipt" => $receipt,
                    "date_submit" => $date_submit,
                    "set1" => $set1,
                    "set2" => $set2,
                    "set3" => $set3,
                    "set4" => $set4,
                    "seta" => $seta,
                    "setb" => $setb,
                    "setc" => $setc);
    $stmt->execute($params);
    include("success.html");
  } catch (PDOException $ex) {
    handle_db_error();
  }
?>