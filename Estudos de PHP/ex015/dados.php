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
    <h1>Teste de Integração</h1>
    <?php
    $inp = $_GET ["input"];
    $inp2 = $_GET ["input2"];
    
    function lambda ($n1, $n2) {
        $a = $n1 + $n2;
        echo "$a"; 
    };

    lambda($inp,$inp2)
    ?>  
</body>
</html>