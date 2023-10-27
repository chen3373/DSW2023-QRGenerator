<?php

require "../vendor/autoload.php";

use Chen\QrGenerator\QrBuilder;

$qr1 = QrBuilder :: create($_POST['data'], $_POST['label'] ,$_POST['filename']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>El QR generado para <?=$_POST['data']?></p>
    <h1>Generador de código QR</h1>
    <img src="img/<?=$_POST['filename']?>.png" alt="<?=$_POST['data']?>">
</body>
</html>