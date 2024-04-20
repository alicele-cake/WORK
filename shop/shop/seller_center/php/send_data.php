<?php

session_start();
include("../../datatable_php/datatable.php");

$seller_name = $_SESSION["user_name"];
$type_id = $_GET["id"];
$type_name = $_POST["type_name"];
$type_price = $_POST["type_price"];
$type_quantity = $_POST["type_quantity"];
$commodity_name = $_SESSION["commodity_name"];

$commodity_number = $_SESSION["commodity_number"];

$statement = create_commodity_inventory($commodity_number, $seller_name, $commodity_name, $type_id, $type_name, $type_price, $type_quantity); //沒有主鍵，商品號碼有問題

if ($type_id < $_SESSION["pagenum"]) {
    header('Location:/WORKS/shop/shop/seller_center/screen/seller_center_type.php?id=' . ($type_id + 1));
} else {
    header('Location:/WORKS/shop/shop/store_php/screen/index.php');
}
