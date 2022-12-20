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
    $a = $_GET ["n1"];
    $b = $_GET ["n2"]; 
    function somar ($a, $b) {
        $s = $a + $b;
        echo "$s";
    };
    somar ($a, $b);
    ?>
</body>
</html>