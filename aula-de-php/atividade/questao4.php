<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>  Divisivel </h1>
    <form action="questao4.php" method ="GET">

    <label >Numero</label>
    <input type ="text" name = "numero">
    <input type ="submit" value ="enviar">      
</fomr>
</body>
</html>
<?php

if(isset($_GET["numero"])){
    $numero = $_GET["numero"];
    $modulo5 = $numero%5;
    $modulo3 = $numero%3;

     if ($modulo5==0&&$modulo3==0) {
        echo "<br>";
         echo "o numero $numero é divisivel por 3 e por 5";
    }

    else if($modulo5==0){
        echo "<br>";
        echo "o numero $numero é divisivel por 5";
    }
    else if ($modulo3==0) {
        echo "<br>";
         echo "o numero $numero é divisivel por 3";
    }
    
    else{
        echo "<br>";
         echo "o numero $numero não é divisivel por 5 e nem por 3";
    }



}
?>