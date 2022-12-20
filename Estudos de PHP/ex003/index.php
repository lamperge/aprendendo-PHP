<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $absoluto = abs ($n1);
    $quadrado = pow ($n1, $n2 );
    $raiz = sqrt ($n1);
    echo "<h2> Operadores </h2>";
    echo "O valor absoluto de $n1 é $absoluto";
    echo "<br>$n1<sup>$n2</sup> é $quadrado.";
    echo "<br> a raiz de $n1 é $raiz"
    ?>
</body>
</html>