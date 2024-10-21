<?php
/* CBTIS 89
P30Array9.php
Programa que almacena 6 datos y con otra funcion agrega otos dos nombres y funciona con el ciclo for.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino */

$nombres = array("Mia", "Leo", "Carlos", "Allison", "Samuel", "Angel");
//orden ascedente
sort($nombres);
echo "Orden Ascendente:<p> ";
for($i=0;$i< count($nombres);$i++){
	echo$nombres[$i]."<br>";
}
array_push($nombres, "Pedro","Maria","Arron","Paulina");
unset($nombres[1]);
unset($nombres[4]);
$nombres = array_values($nombres); 
echo "<br>";
//orden descendente
echo "Orden Descendente:<p> ";
for($i=0;$i< count($nombres);$i++){
	echo$nombres[$i]."<br>";}
	echo "<br>";
echo "El numero de elementos actual en el arreglo es de:".count($nombres);
?>