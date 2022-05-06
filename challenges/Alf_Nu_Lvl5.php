<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>

        function escape(s) {
            var s = document.getElementById('q').value
            var text = s.replace(/</g, '&lt;').replace(/"/g, '&quot;');
            // URLs
            text = text.replace(/(http:\/\/\S+)/g, '<a href="$1">$1</a>');
            // [[img123|Description]]
            text = text.replace(/\[\[(\w+)\|(.+?)\]\]/g, '<img alt="$2" src="$1.gif">');
            
            console.log(text)
        }

    </script>

    <form onsubmit="escape()" >
        <label >Your payload:</label>
        <input id="q" name="q">
        <input type="submit">
    </form> 



</body>
</html>