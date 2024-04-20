<?php

$max_num = getAllCommoditys_MaxPrice($row['commodity_number']);
$min_num = getAllCommoditys_MinPrice($row['commodity_number']);

if ($min_num[0]['MinPrice'] == $max_num[0]['MaxPrice']) {
    echo $min_num[0]['MinPrice'];
} else {
    echo $min_num[0]['MinPrice'];
    echo "~";
    echo $max_num[0]['MaxPrice'];
}
