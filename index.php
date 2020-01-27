<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="save.php" method="post">
        <p>
            <textarea rows="10" cols="45" name="text"><?php
                    $path = "textData.txt";
                    $textFile = fopen($path, "r");
                    echo fread($textFile, filesize($path));
                    fclose($textFile);
                ?></textarea>
        </p>
        <input type="submit" value="Save Edited File">
    </form>
</body>
</html>