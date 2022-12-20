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
    <h1>Cadastro</h1>
    <?php
    $nome = $_GET["nome"];
    $ano = $_GET["nasc"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;
    echo "O usuário é $sexo, o nome é $nome e tem $idade anos." 
    ?> <br>
    <a href="./index.html">Voltar</a>
</body>
</html>