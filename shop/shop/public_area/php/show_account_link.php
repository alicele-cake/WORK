<?php
if (!(isset($_SESSION["user_name"]))) {
    echo "../../login_php/screen/login_view.php";
} else {
    echo  "#";
}
