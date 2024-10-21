<?php
/*CBTIS 89
P22Array4.php
Programa que almacena los nombres de jugadores de una selección nacional en un arreglo
asociativo, donde las claves representan las posiciones de los jugadores y los valores son los
nombres de los mismos. Posteriormente, utiliza un bucle foreach para imprimir cada jugador junto
con su respectiva posición en un formato legible.

Midreth Yesenia Alvarado Rosales
3°A Programación Matutino*/

$equipo=array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");
echo"**SELECCIÓN NACIONAL**","<br>","<br>";
foreach ($equipo as $posicion=>$jugador)
	{echo" El jugador: ".$jugador. " es el ".$posicion;
echo "<br>","<br>";}
?>