<html>

<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        .card {
            width: 500px;
            margin: 0 auto;
        }

        .form {
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>

<body style="background-color:F0F0F0;">
    <!-- <div class="card mt-5">
        <h1 class="mt-4 text-center">Edit Comment</h1>
        <div class="form p-3">
            <form method="POST" action="/Guestbook/update_comment.php">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">暱稱: </span>
                    </div>
                    <input class="form-control" type="text" name="name" required="required" value="<?php echo $account[0]['ce_user_name'] ?>" placeholder="輸入暱稱">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-light bg-dark">評論: </span>
                    </div>
                    <textarea class="form-control" name="comment" required="required" cols="40" rows="5" placeholder="輸入評論"></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $password ?>">
                <input type="submit" name="submit" class="btn btn-dark" value="修改資料">
            </form>
        </div>
    </div> -->

    <p><?php echo $password ?></p>
    <p><?php echo json_encode($account[0]['ce_password']); ?></p>
    <p><?php
    $new_password = '"' . $password . '"';
    if (json_encode($account[0]['ce_password']) == $new_password) {
        echo 1;
        echo $password . json_encode($account[0]['ce_password']) . $new_password;
    } else {
        echo 0;
        echo $password . json_encode($account[0]['ce_password']) . $new_password;
    }
    ?></p>
    <!-- <p><?php echo mysqli_fetch_assoc($account[0]['ce_password']); ?></p> -->
</body>

</html>
