<?php
include("../php/datatable.php");
if (isset($_POST["name"])) {
    $test = getData($_POST["name"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>測試SQL網頁實作</h1>
    <form action="" method="POST">
        <div class="input-group mb-3">
            <input class="form-control" type="text" name="name" required="required" value="" placeholder="名稱">
        </div>
        <input type="submit" class="btn btn-dark input-group login" value="登入">
    </form>
    <h2>

        <?php
        if (isset($test[0]["ce_user_name"])) {
            // echo var_dump($test);
            echo $test[0]["ce_user_name"] . " / " . $test[0]["ce_password"];
        }
        ?>
    </h2>
</body>

</html>