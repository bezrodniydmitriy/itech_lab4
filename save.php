<?php
    $savedTest = htmlspecialchars($_POST['text']);
    $file = fopen('textData.txt', 'w+');
    fwrite($file, $savedTest);
    fclose($file);
    header('Location: index.php');
?>