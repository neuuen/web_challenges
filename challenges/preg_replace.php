<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Preg_replace</h1>

    <a href="http://localhost:8000/index.php"> Home </a> <br>

    <?php

    try {
        $escaped = preg_replace("/[`<>ux]\\/", "", $_GET['payload']);
        #$escaped = preg_replace("/[`<>ux]/", "", $_GET['payload']);

    } catch (Exception $e) {
        echo "<p>Caught exception as </p> ";
    }
    ?>

    <script>
        window.addEventListener("load", function() {
            
            var name = `<?= $escaped ?>`;
            console.log(name);
            window.greeting.innerHTML = (name == '' ? 'こんにちは!' : name + 'さん, こんにちは!');
        });
    </script>

    <p id="greeting"></p>

    <h1>inject</h1>
    <form>
        <input type="text" name="payload" placeholder="your payload here">
        <input type="submit" value="GO">
    </form>

    <h1>src</h1>

</body>
</html>