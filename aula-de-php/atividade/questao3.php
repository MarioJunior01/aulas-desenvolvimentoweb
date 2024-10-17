<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Calcular </h1>
    <form action="questao3.php" method="GET">

        <label>Numero</label>
        <input type="text" name="numero">
        <input type="submit" value="enviar">
        </fomr>
</body>

</html>


<?php

if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
    if ($numero > 0) {
        $raiz = sqrt($numero);
        printf(" a raiz quadrada  é   %.2f", $raiz);
    } else if ($numero < 0) {
        $quadrado = pow($numero, 2);
        echo "O quadrado do numero é  $quadrado";
    }
}

?>