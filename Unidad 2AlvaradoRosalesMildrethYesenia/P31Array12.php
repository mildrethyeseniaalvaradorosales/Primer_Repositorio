<?php
/*CBTIS 89
P32Array13.php
Programa que almacena numeros en un arreglo y los enumera de manera ascendente y descendente.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);
//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);
echo "<p>";
//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>