<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Raiz Quadrada</h1>
    <?php
    $valor = $_GET ["valor"];
    $raiz = sqrt($valor);
    echo "a raiz de $valor é ".number_format($raiz,2); 
    ?> <br>
    <a href="./index.html">Voltar</a>
</body>
</html>