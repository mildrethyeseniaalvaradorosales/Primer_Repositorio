<?php
/*CBTIS 89
P28Array9.php
Programa que almacena los precios de varios productos de ropa en un arreglo 
asociativo. Utiliza un bucle foreach para recorrer el arreglo e imprime el nombre de 
cada prenda junto con su precio en un formato legible. 
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
$ropa = array( "playeras" => "100","camisas" => "250","pantalones_de_mezclilla"=>"300","bermudas" => "200");
foreach($ropa as $prenda=>$precio){
     echo "La prenda " . $prenda . " tiene un precio de " . $precio;
     echo "<br>";
   }
var_dump($ropa);
?>
