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
    <h1>Média</h1>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $m = ( $n1 + $n2 )/2;
    if ($m > 7) {
        $aluno = "APROVADO";
    } else if ($m < 5 ){
        $aluno = "REPROVADO";
    } else {
        $aluno = "RECUPERAÇÃO";
    }
    echo "A média entre $n1 e $n2 é igual a $m <br> 
    Situação do Aluno: <STRONG>$aluno</STRONG>";
    ?>
</body>
</html>