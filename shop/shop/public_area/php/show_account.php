<?php
if (!(isset($_SESSION["user_name"]))) {
    echo "登入";
} else {
    echo  $_SESSION["user_name"];
}
