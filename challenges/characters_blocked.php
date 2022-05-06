<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h1>Characters Blocked</h1>

    <a href="http://localhost:8000/index.php"> Home </a> <br>


    <form action="/challenges/characters_blocked.php" method="GET" >
        <label >Your payload:</label>
        <input id="q" name="q">
        <input type="submit">
    </form> 
    <br>
  
    <?php
    $q = $_GET['q'];
    # block dangerous characters
    if(preg_match('/[()\.:{}$,\\\\&#<>]/', $q)) {
        header('HTTP/1.1 400 Bad Request', true, 400);
        exit(1);
    } else {
        echo "<img " . $q . " >";
    }
    ?>

</body>
</html>

