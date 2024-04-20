    function testin() {
            var x = document.getElementById("demo").value;
    x = parseInt(x, 10);
            if (x > 1) {
        document.getElementById('demo').value = x - 1;
            }
        }

    function testadd() {
            var x = document.getElementById("demo").value;
    x = parseInt(x, 10);
    document.getElementById('demo').value = x + 1;
        }