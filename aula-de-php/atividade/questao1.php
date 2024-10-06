<
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

<?php

 
 

 if(isset($_GET["numero"])){

    $numero = $_GET ["numero"];
    $tipo= $numero%2;
    if($tipo==0){
      echo "$numero é par";
   }
   else{
      echo "$numero é impar";
   }



 }

 









?>