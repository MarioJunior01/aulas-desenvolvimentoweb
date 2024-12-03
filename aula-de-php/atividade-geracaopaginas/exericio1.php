<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exercicio1.css">
    <title>Document</title>
</head>

<body class="body">
    <h1> Por favor preencha os campos abaixo</h1>
    <form action="" method="get" class=" form">
        <label>Nome:</label>
        <input type="text " name="nome">
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome">
        <br>
        <label>Idade:</label>
        <input type="number" name="idade">
        <br>
        <label>Numero de Telefone:</label>
        <input type="text" name="telefone">
        <br>
        <label>Cpf:</label>
        <input type="text" name="cpf">
        <br>
        <label> Rg:</label>
        <input type="text" name="rg">
        <br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>

<?php
if (isset($_GET["nome"])&& isset($_GET["sobrenome"])&&isset($_GET["idade"])&&isset($_GET["telefone"])&&isset($_GET["cpf"])&& isset($_GET["rg"])) {
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $idade = $_GET["idade"];
    $telefone = $_GET["telefone"];
    $cpf = $_GET["cpf"];
    $rg = $_GET["rg"];
    echo "<br> Seu nome é $nome $sobrenome <br>";
    echo "Você tem $idade anos <br>";
    echo "Seu numero de telefone é $telefone <br>";
    echo "Seu Cpf é $cpf <br>";
    echo"Seu Rg é $rg <br>";
}

?>