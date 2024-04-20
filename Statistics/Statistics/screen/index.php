<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.staticfile.org/Chart.js/3.9.1/chart.js"></script>
    <title>搜尋資料</title>
</head>

<body>
    <?php
    include("../public_area/screen/header.php");
    ?>
    <div class="title_word">
        <p class="title">資料庫分析</p>
    </div>
    <div class="search_form">
        123
    </div>

    <div class="statistics">
        <div class="chart_line">
            <canvas id="myChart"></canvas>
        </div>
        <div class="chart_pie">
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    <div class="data">
        123
    </div>


    <script>
        const ctx = document.getElementById('myChart');
        const labels = ['一月份', '二月份', '三月份', '四月份', '五月份', '六月份', '七月份']; // 设置 X 轴上对应的标签
        const data = {
            labels: labels,
            datasets: [{
                label: '我的第一个折线图',
                data: [
                    <?php
                    echo "65, 59, 80, 81, 56, 55, 40"; //測試php
                    ?>
                ],
                fill: false,
                borderColor: 'rgb(75, 192, 192)', // 设置线的颜色
                tension: 0.1
            }]
        };
        const config = {
            type: 'line', // 设置图表类型
            data: data,
        };
        const myChart = new Chart(ctx, config);



        const ctx2 = document.getElementById('myChart2');
        const data2 = {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: '饼图实例',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const config2 = {
            type: 'pie',
            data: data2,
        };
        const myChart2 = new Chart(ctx2, config2);
    </script>
</body>

</html>