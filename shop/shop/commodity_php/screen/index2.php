<?php

session_start();
include("../../datatable_php/datatable.php");
$statement = getAllComments();
$commodity = getAllCommoditys();
$commodity_type = Seach_Id_to_Commoditys($_GET['id']);

$_SESSION["id"] = $_GET['id'];
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/commodity.css">
    <link rel="stylesheet" href="../../public_area/css/store_header.css">
    <link rel="stylesheet" href="../../public_area/css/footer.css">
    <script>
        function reduce() {
            var x = document.getElementById("number").value;
            x = parseInt(x, 10);
            if (x > 1) {
                document.getElementById('number').value = x - 1;
            }
        }

        function add() {
            var x = document.getElementById("number").value;
            x = parseInt(x, 10);
            document.getElementById('number').value = x + 1;
        }
    </script>

</head>

<body>

    <?php
    include("../../public_area/screen/store_header.php");
    ?>

    <div class="commodity_store">

        <div class="commodity">
            <!-- <div><p>.</p></div> -->
            <div class="merchant_product">
                <?php
                // echo $_GET['id'];
                ?>

                <div class="commodity_photo">
                    <div class="commodity_carousel">
                        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="false">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../../photo/commodity_<?php echo ($_GET['id'] - 1); ?>
                                        /commodity_<?php echo ($_GET['id'] - 1); ?>-1.jpg" class="rounded mx-auto d-block photo-item" alt="...">
                                </div>
                                <?php
                                for ($num = 2; $num <= $commodity[($_GET['id'] - 1)]["number_of_pictures"]; $num++) {
                                ?>
                                    <div class="carousel-item">
                                        <img src="../../photo/commodity_<?php echo ($_GET['id'] - 1); ?>
                                        /commodity_<?php echo ($_GET['id'] - 1); ?>-<?php echo $num; ?>.jpg" class="rounded mx-auto d-block photo-item" alt="...">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="product_share_like">
                        <div class="product_share">
                            <span>
                                分享:
                            </span>
                            <img src="../../photo/fb.png" class="share_icon">
                            <img src="../../photo/instagram share.png" class="share_icon">
                            <img src="../../photo/twitter.png" class="share_icon">
                        </div>
                        <div class="product_like">
                            <a class="heart_icon_link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart heart_icon" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </a>
                            <span>
                                喜歡(87)無功能
                            </span>
                        </div>

                    </div>
                </div>



                <div class="commodity_text">
                    <p class="commodity_name">
                        <?php
                        echo $commodity[($_GET['id'] - 1)]["commodity_name"];
                        $_SESSION["commodity_name"] = $commodity[($_GET['id'] - 1)]["commodity_name"]
                        ?>
                    </p>
                    <p class="commodity_less_information">
                        <span class="commodity_star">
                            <u>
                                <?php
                                $avg_star = calculate_star($_GET['id']);
                                $avg_input = round($avg_star[0]['AVG(star)'], 1);
                                echo $avg_input;
                                ?>
                            </u>
                        </span>
                        <span class="commodity_evaluate">
                            <span class="commodity_evaluate_number">
                                <u>
                                    <?php
                                    $COUNT_message = getCommoditys_message($_GET['id']);
                                    // echo var_dump($COUNT_message);
                                    echo $COUNT_message[0]["COUNT(id)"];
                                    ?>
                                </u>
                            </span>
                            <span class="commodity_evaluate_word">評價</span>
                        </span>
                        <span class="commodity_export">
                            <span class="commodity_export_quantity_number">
                                <?php
                                $SUM_quantity = getAllCommoditys_sold($_GET['id']);
                                echo $SUM_quantity[0]["SUM(type_quantity)"];
                                ?>
                            </span>
                            <span class="commodity_export_quantity_word">已售出</span>
                        </span>
                        <span class="commodity_report">
                            <a href="#">檢舉此商品(無功能)</a>
                        </span>
                    </p>
                    <p class="commodity_price">
                        <?php
                        include('../php/price_range.php');
                        ?>
                    </p>
                    <form method="POST" action="../php/send_data.php">
                        <div class="commodity_interface">

                            <div class="commodity_freight">
                                <p class="commodity_freight_word">運送</p>
                                <p class="commodity_freight_price">無功能</p>
                            </div>
                            <div class="commodity_type">
                                <p class="commodity_type_word">種類/選擇</p>
                                <div class="commodity_type_form container">
                                    <div class="row row-cols-auto">
                                        <?php
                                        foreach ($commodity_type as $row) {
                                        ?>
                                            <div class="type_item col">
                                                <input type="radio" class="btn-check" value="<?php echo $row['type_id']; ?>" name="btnradio" id="btnradio<?php echo $row['type_id']; ?>" autocomplete="off" checked>
                                                <label class="btn btn-outline-warning" for="btnradio<?php echo $row['type_id']; ?>">
                                                    <?php
                                                    echo $row['type_name'] . '<br>';
                                                    ?>
                                                </label>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <!-- <div class="type1 type_item col">
                                            <input type="radio" class="btn-check" value="0" name="btnradio" id="btnradio0" autocomplete="off" checked>
                                            <label class="btn btn-outline-warning" for="btnradio0">
                                                test
                                            </label>
                                        </div>
                                        <div class="type1 type_item col">
                                            <input type="radio" class="btn-check" value="0" name="btnradio" id="btnradio0" autocomplete="off" checked>
                                            <label class="btn btn-outline-warning" for="btnradio0">
                                                test
                                            </label>
                                        </div>
                                        <div class="type1 type_item col">
                                            <input type="radio" class="btn-check" value="0" name="btnradio" id="btnradio0" autocomplete="off" checked>
                                            <label class="btn btn-outline-warning" for="btnradio0">
                                                test
                                            </label>
                                        </div>
                                        <div class="type1 type_item col">
                                            <input type="radio" class="btn-check" value="0" name="btnradio" id="btnradio0" autocomplete="off" checked>
                                            <label class="btn btn-outline-warning" for="btnradio0">
                                                test
                                            </label>
                                        </div>
                                        <div class="type1 type_item col">
                                            <input type="radio" class="btn-check" value="0" name="btnradio" id="btnradio0" autocomplete="off" checked>
                                            <label class="btn btn-outline-warning" for="btnradio0">
                                                test
                                            </label>
                                        </div>
                                        <div class="type1 type_item col">
                                            <input type="radio" class="btn-check" value="0" name="btnradio" id="btnradio0" autocomplete="off" checked>
                                            <label class="btn btn-outline-warning" for="btnradio0">
                                                test
                                            </label>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <div class="commodity_quantity">
                                <p class="commodity_quantity_word">數量</p>
                                <div class="control_quantity">
                                    <button type="button" onclick="reduce()" class="btn btn-outline-warning">-</button>
                                    <textarea class="form-control num" id="number" name="comment" required="required" placeholder="輸入評論">1</textarea>
                                    <button type="button" onclick="add()" class="btn btn-outline-warning">+</button>
                                </div>

                            </div>

                        </div>
                        <div class="commodity_button">
                            <input type="submit" name="submit" class="btn btn-warning" value="加入購物車">
                            <input type="submit" name="submit" class="btn btn-warning" value="直接購買">
                        </div>
                    </form>


                </div>

            </div>
            <div class="merchant">
                <div class="merchant_contact">
                    <!-- 圖片無法固定大小 -->
                    <div class="merchant_icon">
                        <img src="../../photo/commodity_0/commodity_0-2.jpg" class="img-thumbnail">
                    </div>
                    <div class="merchant_less_information">
                        <div class="merchant_name">
                            <?php
                            echo $commodity[($_GET['id'] - 1)]["seller_name"];
                            ?>
                        </div>
                        <div class="merchant_online_time">
                            8877??上線
                        </div>
                    </div>

                </div>
                <div class="">

                </div>
                <p>666</p>
            </div>
            <div class="product_information">
                <!-- <div class="product_specifications">
                    <p>1234is</p>
                </div>
                <div class="product_details">
                    <p>5555</p>
                </div> -->

            </div>
        </div>

        <div class="comment">
            <!-- <a href="../screen/index2 copy.php?id=<?php echo $_GET['id'] ?>"> -->
            <p class="comment_word">商品評價</p>
            <!-- </a> -->
            <?php
            foreach ($statement as $row) {
                if ($_GET['id'] == $row['commodity_number']) {
            ?>
                    <div class="comment_item">
                        <div class="message_board">
                            <div class="message_name">
                                <?php
                                echo $row['commentator_name'];
                                ?>
                            </div>
                            <div class="message_star">
                                <?php
                                echo $row['star'];
                                ?>
                            </div>
                            <div class="message_date_and_commodity">
                                <div class="message_date">
                                    <?php
                                    echo $row['date'];
                                    ?>
                                </div>
                                <div class="message_commodity">種類:
                                    <?php
                                    echo $row['commodity_type_name'];
                                    ?>
                                </div>
                            </div>
                            <div class="message">
                                <?php
                                echo $row['comment'];
                                ?>
                            </div>

                        </div>
                        <hr>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    </div>


    <?php
    include("../../public_area/screen/footer.php");
    ?>

</body>

</html>