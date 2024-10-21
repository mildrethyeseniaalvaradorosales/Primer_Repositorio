<?php
/*CBTIS 89
P30Array9.php
Programa que almacena datos en un arreglo y muestra de manera ascedente y descendente.
Mildreth Yesenia Alvarado Rosales
3°A Programación Matutino*/
//orden ascendente
$Productos=array("Camisa","Pantalon","Cinturon","Gorra","Calcetin")
//orden ascedente
sort($Productos);
var_export($Productos);
echo "<p>";

//orden descendente
rsort($Productos);
var_export($Productos);

?>