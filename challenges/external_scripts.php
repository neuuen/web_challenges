<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>External Scripts</h1>

    <a href="http://localhost:8000/index.php"> Home </a> <br>

    <p>hmmmmmm</p>

    <script>
        url = window.location.hash.substr(1);
        some_script = document.createElement('script');
        some_script.src = url;
        document.body.appendChild(some_script);
    </script>

</body>
</html>