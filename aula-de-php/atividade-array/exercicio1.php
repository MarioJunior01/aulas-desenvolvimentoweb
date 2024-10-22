<?php

$numeros = array(1, 2, 3, 4, 5);
$contador = 0;
$sooma=0;
foreach ($numeros as $i) {
    $contador++;
    $soma =+$i;
    echo" Os numeros são : $i <br>";
}

$media = $soma / $contador;
echo "A media é de $media";
?>
