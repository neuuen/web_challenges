<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h1>Location Hash 1JS</h1>

    <a href="http://localhost:8000/index.php"> Home </a> <br>


    <a id="query"></a>

    <script>
        window.addEventListener("load", function() {
            var q = location.hash.substring(1);
            window.query.innerHTML = q == '' ? `Hello!` : (`Hello, ${decodeURI(q)}`);
        });
    </script>

</body>
</html>

