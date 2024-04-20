<?php
if (!(isset($_SESSION["user_name"]))) {
    echo "../../login_php/screen/register_account.php";
} else {
    echo  "../../public_area/php/sign_out.php";
}
?>