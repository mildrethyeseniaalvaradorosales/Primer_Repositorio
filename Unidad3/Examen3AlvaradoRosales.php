<?php
/*Mildreth Yesenia Alvarado Rosales
3° A Programación T.M
CBTIS89
Examen3AlvaradoRosales.php
Programa que alamacena el nombre de cuatro personas en un arreglo $Alumnos y en otro arreglo multidimensional llamado $Calificaciones de cada uno de ellos por medio de filas y columas y debes calcular por medio de ciclos el promedio de cada  alumno y guardarlo en el arreglo $Promedio de igual manera en el arreglo $status debes almacenar la palabra Aprobado o Reprobado segun corresponda.
*/
$Alumnos=array(Luz,Fer,Leo,Ale);
$Calificaciones = array(array(6, 4, 5),array(7, 9, 8),array(7, 9, 5),array(5,4,6));
$Promedio=array();
$Status=array( "Aprobado","Reprobado");
for ($i = 0; $i<count($Calificaciones); $i++) {
    if ($$Promedio<5) {
        $Status[$i] = "REPROBADO"; 
    } else {
        $Status[] = "APROBADO"; 
    }
}
$longitud = count($Calificaciones);
	for ($i = 0; $i <count($Calificaciones); $i++) {
		 if ($Promedio[$i] < 5) {
        $Status[$i] = Reprobado;}
    else{ 
    	$Status[$i] = Aprobado;} 

echo "CBTIS 89 <br>"; 
echo "Alumnos", " ","Promedio"," ","Status";
echo"<br>";
for ($i = 0; $i <$longitud; $i++) {
    echo $Alumnos[$i]."---".$Promedio[$i]."---".$Status[$i];
    echo "<br>";
   }
echo "Calificaciones".count($Calificaciones);
?>