<?php
//有問題檔案!!
    include("../../datatable_php/datatable.php");
$ce_user_name = $_POST["ce_user_name"];
$ce_password = $_POST["ce_password"];
$_SESSION["ce_user_name"] = $ce_user_name;
$_SESSION["ce_password"] = $ce_password;

$box = check_account($ce_user_name, $ce_password);
// echo var_dump($box);
if (isset($box[0]['ce_user_name'])) {
    if (($box[0]['ce_user_name'] == $ce_user_name) && ($box[0]['ce_password'] == $ce_password)) {
        header('Location:/WORKS/shop/shop/store_php/screen/index.php'); //不會等echo出來

        echo "<script>alert('此帳號已經註冊');</script>" . "<br>";
    }
} else {
    // echo "<script>alert('此帳號沒有註冊');</script>" . "<br>";
    
    $statement = register_account($ce_user_name, $ce_password);
    header('Location:/WORKS/shop/shop/login_php/screen/register_success.php');
}

