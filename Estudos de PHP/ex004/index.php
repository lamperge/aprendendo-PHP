<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dez Porcento</h1>
    <?php
    $preco = $_GET ["p"];
    echo "O preço do produto é $preco R$ <br>";
    $dezpct = ($preco*10/100);
    $desc = $preco - $dezpct;
    echo "10% de $preco é $dezpct <br>";
    echo "Se o desconto for de 10% o valor do produto será $desc R$";
    ?>
</body>
</html>