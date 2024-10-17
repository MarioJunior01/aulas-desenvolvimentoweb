<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Calcular Média </h1>
    <form action="questao2.php" method="GET">

        <label>Nota 1</label>
        <input type="text" name="nota1">
        <br>
        <br>
        <label> Nota2 </label>
        <input type="text" name="nota2">
        <br>
        <br>
        <label> Nota3 </label>
        <input type="text " name="nota3">
        <input type="submit" value="enviar">
    </form>
</body>

</html>


<?php

if (isset($_GET["nota1"]) && isset($_GET["nota2"]) && isset($_GET["nota3"])) {

    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media < 6) {
        echo "Aluno reprovado";
    } else {
        echo "Aluno aprovado";
    }
}

?>