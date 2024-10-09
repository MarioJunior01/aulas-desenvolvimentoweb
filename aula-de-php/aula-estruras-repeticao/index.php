<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

 <h1>Impar ou Par </h1>

<form action="" method = "GET">

<label> Digite um numero </label>

<input type = "text "  name="numero">
</form> 

</body>
</html>
</body>
</html>
<?php
$numero = $_GET["numero"];

$tabuada=0;
while($tabuada<10){
    $tabuada++;
    $resultado = $numero*$tabuada;
    
    echo "$numero x $tabuada = $resultado\n";
    echo "<br>";
   



}

$coisas = array("mario","tigo","shau");
//foreach diferente
foreach($coisas as $elementos){

    echo "$elementos.";
    echo"<br>";
    echo"<br>";
    
}
$sla =array( "bomba"=>20,"carro"=>30,"faca"=>53);
 foreach($sla as $chave => $valor){

    echo "Nome: $chave - valor: $valor <br>";
 }





?>