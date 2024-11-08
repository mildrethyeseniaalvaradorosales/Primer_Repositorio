<?php
/* CBTIS 89
Mildreth Yesenia Alvarado Rosales 
P39Array19.php 
Programa que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones:
Si la persona es menor a 18 años se debe colocar 1 en el arreglo $Grupo1 y en los otros dos colocar un 0.
Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros colocar un 0.
Si la persona tiene 50 años o más se debe colocar un 1 en el arreglo $Grupo3 y en los otros colocar un 0.
3°A Programación T.M.
*/

$Nombre = array("Paco", "Mari", "Lalo", "Rosi", "Paty", "Beto");
$Edad = array(17, 30, 71, 38, 12, 58);
$Grupo1 = array(); 
$Grupo2 = array(); 
$Grupo3 = array(); 
for ($i = 0; $i < count($Edad); $i++) {
    $Grupo1[$i]=0;
    $Grupo2[$i]=0;
    $Grupo3[$i]=0;
    if ($Edad[$i] < 18) {
        $Grupo1[$i] = 1;
    } 
    elseif ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
        $Grupo2[$i] = 1; 
    } 
    elseif ($Edad[$i] >= 50) {
        $Grupo3[$i] = 1; 
    }
}
echo "CBTIS 89<br>"; 
echo "Nom", " ","Edad"," ", "Gpo1"," ","Gpo2"," ","Gpo3";
echo"<br>";
{for ($i=0;$i<6;$i++)
  echo $Nombre[$i]."---".$Edad[$i]."-----".$Grupo1[$i]."-----".$Grupo2[$i]."-----".$Grupo3[$i]."<br>";
}
?>
