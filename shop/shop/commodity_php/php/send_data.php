<?php

session_start();
date_default_timezone_set("PRC");
include("../../datatable_php/datatable.php");
$number = $_POST['comment'];
$commodity_number = $_SESSION["id"];
$commodity_type = $_POST['btnradio'];

include("../../public_area/php/account_login_check.php");

$commoditys_data = Seach_Id_to_Commoditys_type($commodity_number, $commodity_type);
$commodity_name = $commoditys_data[0]["commodity_name"];
$commodity_type_name = $commoditys_data[0]["type_name"];
$commodity_quantity = $commoditys_data[0]["type_quantity"];
$commodity_price = $commoditys_data[0]["type_price"];
$price = $commodity_price * $number;
$date = date("Y/m/d-H:i:s");

if ($commodity_quantity < $number) {
    header("Location:/WORKS/shop/shop/commodity_php/screen/buy_fail.php?id=" .  $commodity_number . "&type_id=" . $commodity_type);
} else {
    $test = updateCommodity($commodity_number, $commodity_type, $price);
    $statement = calculate_sold($commodity_number, $commodity_name, $commodity_type, $commodity_type_name, $price, $price, $date);
    header("Location:/WORKS/shop/shop/commodity_php/screen/buy_success.php?id=" .  $commodity_number . "&type_id=" . $commodity_type);
}
