<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Olá mundo</h1>
    <?php
    $n1 = $_GET ["a"];
    $n2 = $_GET ["b"];
    $tipo = $_GET ["c"];
    $r = ($tipo == "soma")?$n1+$n2:$n1*$n2;
    echo "Os valores passados foram $n1 e $n2 <br>";
    echo "O resultado é $r"
    ?>
</body>
</html>