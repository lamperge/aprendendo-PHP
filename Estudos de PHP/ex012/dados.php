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
    <h1>Votação</h1>
    <?php
    $ano = $_GET["anodenascimento"];
    $idade = date("Y") - $ano;
    if($idade < 16) {$condicaodevoto = "<strong>proibido de votar</strong>";}
    else
    { if ($idade >= 16 && $idade < 18) {
        $condicaodevoto = "voto opcional"; 
       } else if ($idade >= 65) {
        $condicaodevoto = "voto opcional";
       } else {
        $condicaodevoto = "voto obrigatório";
       }
    };
    if ($idade > 120 || $idade < 0 ) {
        echo "Ano Inválido";
    }
     else { echo "Sua idade é $idade anos e a condição de voto é <strong>$condicaodevoto</strong>"; }
    ?> <br>
    <button><a href="./index.html">VOLTAR</a></button>
</body>
</html>