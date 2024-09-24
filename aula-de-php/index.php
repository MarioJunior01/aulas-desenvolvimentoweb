<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="arquivo.css">

    <meta charset="UTF-8" />
    <<meta name = "viewport" content = "width-device-width, initial-scale-1.0">
    <<title> Documento </title>

</head>
<body class ="body">
   
    <form action = "index.php" method = GET>
        Digite o Preço : <input type="text" name ="preco">
        <input type = "submit" value ="enviar">

</form>
</body>
</html>
<?php
if(isset($_GET["preco"])){
$preco = $_GET["preco"];
echo "o preco é de $preco"; 
$desconto= $preco/100*10;
$precoDesconto = $preco-$desconto;

echo " O preco atual com desconto de 10% ficou de $precoDesconto";
}
?>

