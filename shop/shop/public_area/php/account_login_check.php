<?php
if (!(isset($_SESSION["user_name"]))) {
    header("Location:/WORKS/shop/shop/login_php/screen/login_view.php");
}
