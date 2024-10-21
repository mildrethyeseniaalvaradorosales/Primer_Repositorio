<?php
/*CBTIS 89
P20Array2.php
Programa que almacena diversos tipos de datos en un arreglo, incluyendo enteros,
cadenas de texto y una variable. Luego, utiliza un ciclo for para recorrer el arreglo e
imprimir cada uno de sus elementos en una nueva línea.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
$nombre ="Elena";
$array=array(1,2,3,"casa",$nombre);

//Se obtiene el número de elementos
$longitud =count($array);

//Recorre todos los elementos
for ($i=0;$i<$longitud;$i++)
{//Se obtiene el valor de cada elemento
echo $array[$i];
echo"<br>";
}
?>