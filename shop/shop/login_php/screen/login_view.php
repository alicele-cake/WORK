<?php
ob_start();
session_start();
?>


<html>

<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login_view.css">
    <link rel="stylesheet" href="../../public_area/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <style>
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .login_area {
            display: flex;
        }

        .link {
            width: 10%;
            padding-right: 5%;
        }

        .link_picture {
            width: 200%;
        }

        .login_word {
            font-size: 2vw;
            text-align: left;
        }

        .helper a {
            font-size: 1vw;
            color: orange;
            text-align: right;
            text-decoration: none;
        }

        .helper a:hover {
            color: orange;
            text-decoration: none;
        }


        .all_content {
            background-color: orange;
        }

        .content {
            width: 64%;
            text-align: right;
            display: flex;
            margin: 0% 18% 2%;
        }

        .picture {
            width: 50%;
            /* height: 60%; */
            /* padding-top: 5%;
            padding-bottom: 5%;
            padding-left: 6vw;
            padding-right: 6vw; */
        }

        .pic {
            width: 100%;
            height: 90%;
        }

        .card {
            width: 50%;
            margin: 5% 0% 5%;
        }

        .login_word2 {
            font-size: 1.8vw;
            text-align: left;
            padding-top: 5%;
            padding-bottom: 1%;
            padding-left: 10%;
        }

        .form {
            width: 86%;
            margin: 0% 8% 0%;
        }

        .register {
            font-size: 80%;
            text-align: center;
        }

        .register span {
            opacity: 0.5;
        }

        .register a {
            color: orange;
            text-align: left;
            text-decoration: none;
        }

        .register a:hover {
            color: orange;
            text-decoration: none;
        }

        .footer {
            margin: 2% 10% 5%;
        }

        .information {
            display: flex;
        }

        .information2 {
            /* display: flex; */
        }

        .description_block2 {
            /* height: auto; */
            float: right;
        }

        .text_r {
            color: black;
            font-size: 1vw;
            opacity: 0.5;
            text-align: right;
        }

        .text_l {
            color: black;
            font-size: 1vw;
            opacity: 0.5;
            text-align: left;
        }

        .description_block2 a:hover {
            color: black;
            opacity: 0.5;
            text-decoration: none;
        }



        .description_block {
            width: 20%;
            padding-top: 5%;
            /* 以整個畫面算的 */
            padding-bottom: 5%;
            padding-left: 5%;
            text-align: left;
        }

        .title {
            /* font-size: 4px; */
            font-size: 1vw;
        }

        .text {
            color: black;
            /* font-size: 12px; */
            font-size: 1vw;
            opacity: 0.5;
        }

        .icon {
            display: flex;
            text-align: left;
        }

        .icon1 {
            width: 35%;
            padding-top: 5%;
            padding-bottom: 10%;
            padding-left: 8%;
        }

        .icon2 {
            width: 1.5vw;
            padding-right: 3%;
        }

        .iconQR {
            width: 55%;
            padding-right: 5%;
        }

        .icon3 {
            width: 5vw;
            padding-top: 6%;
            padding-bottom: 6%;
        }

        .description_block a:hover {
            color: orange;
            opacity: 0.8;
            text-decoration: none;
        }
    </style>
</head>

<body style="background-color:white;">
    <!-- 畫面放大縮小有問題 -->

    <?php
    include("../screen/login_header.php");
    ?>



    <div class="all_content">
        <div class="content">
            <div class="picture">
                <img src="../../photo/shopwords without back.png" class="d-block pic" alt="...">
            </div>

            <div class="card">
                <p class="login_word2">登入</p>
                <div class="form">
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="user_name" required="required" value="" placeholder="使用者名稱">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="password" required="required" value="" placeholder="密碼">
                        </div>
                        <input type="submit" class="btn btn-dark input-group login" value="登入">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    </form>

                    <div>
                        <hr>
                    </div>


                    <div class="register">
                        <span>嗨皮新朋友？</span>
                        <a href="../screen/register_account.php">
                            <b>
                                註冊
                            </b>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php
    include("../../public_area/screen/footer.php");
    ?>

</body>

</html>

<?php

if (isset($_POST["user_name"])) {
    $_SESSION["user_name"] = $_POST["user_name"];
    $_SESSION["password"] = $_POST["password"];

    include("../../datatable_php/datatable.php");
    $user_name = $_SESSION["user_name"];
    $password = $_SESSION["password"];

    $account = check_password($user_name, $password);
    // echo var_dump($account);
    if (isset($account[0]['ce_user_name'])) {
        if (($account[0]['ce_user_name'] == $user_name) && ($account[0]['ce_password'] == $password)) {
            // echo "s" . "<br>";
            // echo "<script>alert('登入成功');</script>" . "<br>";
            // header有問題
            header('Location:/WORKS/shop/shop/store_php/screen/index.php'); //不會等echo出來
        } else {
            echo "<script>alert('密碼錯誤');</script>" . "<br>";
            // echo "密碼錯誤" . "<br>";
        }
    } else {
        echo "<script>alert('此帳號沒有註冊');</script>" . "<br>";
        // echo "此帳號沒有註冊" . "<br>";
        // header('Location:/Guestbook/test_account_input.php');
    }
}
ob_end_flush();
?>