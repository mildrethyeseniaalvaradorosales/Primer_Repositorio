<?php
/*CBTIS 89
P23Array5.php
Programa que almacena información sobre el costo de diferentes frutas en un arreglo
asociativo. Las claves del arreglo representan el nombre de las frutas, mientras que los
valores indican el costo por kilogramo. Utiliza un bucle foreach para imprimir el costo de
cada fruta en un formato legible.

3°A Programación Matutino*/

$fruta=array("manzana"=>"25","mango"=>"40","limon"=>"35","naranja"=>"20");
echo"**FRUTERIA DEL SUR**","<br>","<br>";
foreach ($fruta as $costo=>$frutas)
	{echo" El kilo de "  . $costo." cuesta " .$frutas;
echo "<br>","<br>";}
?>