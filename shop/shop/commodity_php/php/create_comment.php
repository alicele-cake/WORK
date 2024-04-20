<?php

session_start();
date_default_timezone_set("PRC");
include("../../datatable_php/datatable.php");
$id = $_SESSION["id"];
$commodity_number = $_SESSION["id"];
$name = $_SESSION["user_name"];
$commodity_type_data = Seach_Id_to_Commoditys_type($id, $_SESSION["type_id"]);
$commodity_type_name = $commodity_type_data[0]['type_name'];
$star = $_POST['star'];
$date = date("Y/m/d-H:i:s");
$comment = $_POST['comment'];

$statement = createComment($commodity_number, $name, $commodity_type_name, $star, $date, $comment);
header('Location:/WORKS/shop/shop/commodity_php/screen/index2.php?id=' . $id);
