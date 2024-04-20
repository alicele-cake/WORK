<?php
        // session_start();
        // $_SESSION["ce_user_name"] = $_POST["ce_user_name"];
        // $_SESSION["ce_password"] = $_POST["ce_password"];

        // echo $_SESSION["ce_user_name"] . $_SESSION["ce_password"];
        // if (isset($_SESSION["ce_user_name"])) {
        //     header('Location:/WORKS/shop/shop/login_php/screen/login_view.php');
        // }
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/register_view.css">
    <link rel="stylesheet" href="../../public_area/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</head>

<body style="background-color:white;">
    <!-- 畫面放大縮小有問題 -->

    <?php
    include("../screen/register_header.php");
    ?>


    <div class="all_content">
        <div class="content">
            <div class="picture">
                <img src="../../photo/shopwords without back.png" class="d-block pic" alt="...">
            </div>
            <div class="card">
                <p class="register_word2">註冊</p>
                <div class="form">
                    <form method="POST" action="../php/create_user.php">
                        <div class="input-group mb-3">
                            <!-- <div class="input-group-prepend">
                    </div> -->
                            <input class="form-control" type="text" name="ce_user_name" required="required" value="" placeholder="使用者名稱">
                        </div>
                        <div class="input-group mb-3">
                            <!-- <div class="input-group-prepend">
                    </div> -->
                            <input class="form-control" type="text" name="ce_password" required="required" value="" placeholder="密碼">
                        </div>
                        <input type="submit" class="btn btn-dark input-group register" value="註冊">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    </form>

                    <div>
                        <hr>
                    </div>


                    <div class="register">
                        <span>已經有帳號嗎?</span>
                        <a href="../screen/login_view.php">
                            <b>
                                登入
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
