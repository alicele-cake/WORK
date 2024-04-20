<?php

$max_num = getAllCommoditys_MaxPrice($_GET['id']);
$min_num = getAllCommoditys_MinPrice($_GET['id']);

if ($min_num[0]['MinPrice'] == $max_num[0]['MaxPrice']) {
    echo $min_num[0]['MinPrice'];
} else {
    echo $min_num[0]['MinPrice'];
    echo "~";
    echo $max_num[0]['MaxPrice'];
}
