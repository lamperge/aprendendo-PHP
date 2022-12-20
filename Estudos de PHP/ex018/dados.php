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
<h1>Usando Array</h1>
    <?php
    $n = $_GET ["inpt1"];
    $i = $_GET ["inpt2"];
    $p = $_GET ["inpt3"];
    $pessoa = array ("nome" => $n,
                     "idade" => $i,
                    "peso" =>$p ); 
    print_r($pessoa);
    ?>
</body>
</html>