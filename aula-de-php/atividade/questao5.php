<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Calcular consumo </h1>
    <h2> Digite em metros cubicos o consumo de agua </h2>
    <form action="questao5.php" method="GET">

        <label>Numero</label>
        <input type="text" name="consumo">
        <input type="submit" value="enviar">
        </fomr>
</body>

</html>

<?php

if (isset($_GET["consumo"])) {
    $consumo = $_GET["consumo"];
    $totalConta = 0;


    if ($consumo < 20) {
        $totalConta = $consumo * 8.50;
        echo "<br>";
        echo "o total da conta será de $totalConta";
    } else if ($consumo >= 20) {
        $totalConta = $consumo * 11;
        echo "<br>";
        echo "o total da conta será de $totalConta";
    }
}

?>