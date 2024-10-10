<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Triangulo</h1>
    <form action="questao8.php" method="GET">

        <label>Lado 1</label>
        <input type="text" name="lado1">
        <br>
        <br>
        <label>Lado 2</label>
        <input type="text" name="lado2">
        <br>
        <br>
        <label>lado3</label>
        <input type="text" name="lado3">
        <br>
        <br>
        <input type="submit" value="enviar">
        </fomr>
</body>
</html>
<?php

if (isset($_GET["lado1"]) && isset($_GET["lado2"]) && isset($_GET["lado3"])) {
    $lado1 = $_GET["lado1"];
    $lado2 = $_GET["lado2"];
    $lado3 = $_GET["lado3"];

    if ($lado1 + $lado2 > $lado3 && $lado2 + $lado3 > $lado1 && $lado1 + $lado3 > $lado2) {
        echo "<br>Os lados podem formar um triângulo";
    } else {
        echo "<br>Os lados não formam um triângulo";
    }
}


?>