<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фатальная ошибка</title>
</head>
<body>
    <h1>Ошибка</h1>
    <p><b>Error code: </b> <?= $errno?></p>
    <p><b>Error Text: </b> <?= $errstr?></p>
    <p><b>File: </b> <?= $errfile?></p>
    <p><b>Line: </b> <?= $errline?></p>
</body>
</html>