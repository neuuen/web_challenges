<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h1>HTML Special Chars</h1>

    <a href="http://localhost:8000/index.php"> Home </a> <br>

    <form action="/challenges/htmlspecialchars.php" method="GET" >
        <label >Your payload:</label>
        <input id="q" name="q">
        <input type="submit">
    </form> 

    <?php 
    $payload = htmlspecialchars($_GET["q"]);
    ?>

    <a href="<?= $payload ?>">Link</a>
    
</body>
</html>

