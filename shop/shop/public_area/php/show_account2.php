<?php
if (!(isset($_SESSION["user_name"]))) {
    echo "註冊";
} else {
    echo  "登出";
}
