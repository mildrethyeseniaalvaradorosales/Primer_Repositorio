<?php
/*CBTIS 89
P21Array3.php
Programa que almacena los nombres de seis personas en un arreglo y utiliza un ciclo 
for para recorrer e imprimir cada uno de los nombres en el arreglo, mostrando un nombre por línea.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
$arraynombres=array("Mildreth","Leonardo" ,"Gabriel","Samuel","Sandra","Mia");
//Se obtiene el número de elementos
$longitud =count($arraynombres);

//Recorre todos los elementos
for ($i=0;$i<$longitud;$i++)
{//Se obtiene el valor de cada elemento
echo $arraynombres[$i];
echo"<br>";
}
?>