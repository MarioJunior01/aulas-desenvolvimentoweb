<?php
include ("connection.php");
?>




<?php
$sql = "SELECT * FROM tbcontatos ORDER BY nomeContato ASC";
$result = $conn ->query ($sql);

$busca = $result->fetch_all();
print_r($busca);

?>
