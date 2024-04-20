<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widthdevice-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="mytouch()">觸發</button>
    <script>
        var myparam;

        function mytouch() {
            myparam = setInterval(myevent, 5000);
        }

        function myevent() {
            alert("您好");
        }
    </script>

</body>

</html>