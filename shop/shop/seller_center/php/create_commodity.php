<?php

session_start();
include("../../datatable_php/datatable.php");
$commodity_name = $_POST['commodity_name'];
$type_num = $_POST["type_num"];
$num_of_pictures = $_POST["number_of_pictures"];
$sales_place = $_POST["sales_place"];
$_SESSION["commodity_name"] = $commodity_name;
$_SESSION["pagenum"] = $type_num;

$commodity_number = get_commodity_number(); //HOW取得??，改變方式，取最大值，加入最大值+1!!

echo var_dump($commodity_number);
$commodity_number = ($commodity_number[0]["num"] + 1);
// echo $name . '、' . $commodity_name . '、' . $num_of_pictures . '、' . $sales_place;
$_SESSION["commodity_number"] = $commodity_number;

$statement = create_commodity_information($commodity_number, $num_of_pictures, $commodity_name, $sales_place);
header('Location:/WORKS/shop/shop/seller_center/screen/seller_center_type.php?id=1');
