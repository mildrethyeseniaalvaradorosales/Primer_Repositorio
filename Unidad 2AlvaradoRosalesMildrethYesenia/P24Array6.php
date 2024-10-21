<?php
/*CBTIS 89
P24Array6.php
Programa que almacena información sobre alumnos y sus respectivas escuelas y grupos
en un arreglo asociativo. Las claves representan los nombres de los alumnos, mientras que 
los valores indican la escuela y el grupo al que pertenecen. Utiliza un bucle foreach para 
imprimir los datos de cada alumno en un formato legible.
Midreth Yesenia Alvarado Rosales
3°A Programación Matutino*/

$escuela=array("Mildreth"=>" CBTIS 89 en 3° A Programación","Leonardo"=>" CBTIS 89 en 3° A Programación","Samuel"=>" CBTIS 89 en 3° A Contabilidad ","Armando"=>" CBTIS 110 en 1° A Logistica");
echo"**DATOS DE ALUMNOS **","<br>","<br>";
foreach ($escuela as $alumno=>$grupo)
	{echo" El alumno  "  . $alumno." esta en" .$grupo;
echo "<br>","<br>";}
?>