<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Calculo de raizes </h1>
    <form action="questao7.php" method="GET">

        <label>Coeficiente A</label>
        <input type="text" name="numeroA">
        <br>
        <label>Coeficiente B</label>
        <input type="text" name="numeroB">
        <br>
        <label>Coeficiente C</label>
        <input type="text" name="numeroC">
        <br>
        <input type="submit" value="enviar">
        </fomr>
</body>
</html>
<?php

if (isset($_GET["numeroA"])&&isset($_GET["numeroC"])&&isset($_GET["numeroC"])) {
    $numeroA = $_GET["numeroA"];
    $numeroB = $_GET["numeroB"];
    $numeroC = $_GET["numeroC"];
    $delta = pow($numeroB,2) - 4*$numeroA*$numeroC;
     $raiz1=0;
     $raiz2=0;
   

    if ($delta<0) {
        echo "<br>";
        echo "A equação não possui raiz";
        echo"$delta";
    } 
    else   {
        echo "<br>";
        echo "Delta = $delta";
        $raiz1 = (-$numeroB + sqrt($delta)) / (2 * $numeroA);
        $raiz2 = (-$numeroB - sqrt($delta)) / (2 * $numeroA);
    
        echo "<br>";
        echo "A raiz1 é $raiz1 e a raiz2 é $raiz2";
        
    } 
    

}

