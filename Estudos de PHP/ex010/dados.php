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
    <?php
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $sexo = $_GET["sex"];
    $idade = date("Y") - $ano;
    echo "O usuário é $nome, possui $idade anos de idade e é $sexo.";
    ?>
</body>
</html>