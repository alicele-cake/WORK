<?php

session_start();
include("../../datatable_php/datatable.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <script src="./js/sign_out.js"></script>
    <title>Guestbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <style>
        .card {
            width: 90%;
            margin: 0 auto;
        }

        .form {
            width: 90%;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div class="card mt-5">
        <h1 class="mt-4 text-center">商品<?php echo $_GET["id"]; ?>:</h1>

        <div class="form p-3">
            <form method="POST" action="../php/send_data.php?id=<?php echo $_GET["id"]; ?>">
                <p class="input-group-text text-light bg-dark">
                    賣家名稱:
                    <?php echo  $_SESSION["user_name"]; ?>
                </p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">商品<?php echo $_GET["id"]; ?> 名稱: </span>
                    </div>
                    <textarea class="form-control" name="type_name" required="required" cols="40" rows="5" placeholder="輸入"></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">售價: </span>
                    </div>
                    <textarea class="form-control" name="type_price" required="required" cols="40" rows="5" placeholder="輸入"></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">存貨數量: </span>
                    </div>
                    <textarea class="form-control" name="type_quantity" required="required" cols="40" rows="5" placeholder="輸入"></textarea>
                </div>

                <input type="hidden" name="id" value="id">
                <input type="submit" name="submit" class="btn btn-dark" value="送出留言" style="float:left">
            </form>

        </div>

    </div>




</body>

</html>