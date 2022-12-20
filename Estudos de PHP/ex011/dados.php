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
    <h1>Teste de Maioridade</h1>
    <?php 
    $ano = $_GET["anodenascimento"];
    $idade = date("Y") - $ano;
    if ($idade >= 18) {
        echo "O Usuário tem <strong>$idade</strong> anos portanto pode <strong>votar</strong> e pode <strong>dirigir</strong>.";
    } 
    else {
        echo "O usuário tem <strong>$idade</strong> anos, menor de idade, portanto não pode dirigir.";
    }
    ?>
</body>
</html>