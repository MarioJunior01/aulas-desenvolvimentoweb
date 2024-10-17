<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Intervalos </h1>
    <form action="questao6.php" method="GET">

        <label>NumeroA</label>
        <input type="text" name="numeroA">
        <br>
        <label>NumeroB</label>
        <input type="text" name="numeroB">
        <br>
        <label>NumeroC</label>
        <input type="text" name="numeroC">
        <br>
        <input type="submit" value="enviar">
        </fomr>
</body>

</html>


<?php

if (isset($_GET["numeroA"]) && isset($_GET["numeroC"]) && isset($_GET["numeroC"])) {
    $numeroA = $_GET["numeroA"];
    $numeroB = $_GET["numeroB"];
    $numeroC = $_GET["numeroC"];


    if ($numeroC <= $numeroA && $numeroC <= $numeroB) {
        echo "<br>";
        echo "o numero c esta contido em A e B";
    } else if ($numeroC <= $numeroA) {
        echo "<br>";
        echo "o numero c esta contido em A ";
    } else if ($numeroC <= $numeroB) {
        echo "<br>";
        echo "o numero c esta contido em B ";
    } else {
        echo "<br>";
        echo " o numero c não está em nenhum dos dois numeros";
    }
}

?>